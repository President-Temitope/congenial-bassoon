<?php

namespace Modules\Site\Http\Controllers;

use Exception;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Interfaces\AuthRepositoryInterface;

class SiteController extends Controller
{
    protected AuthRepositoryInterface $auth;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->auth = $authRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('site::index');
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'min:3', 'max:30'],
            'lastname' => ['required', 'string', 'min:3', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()]);
        }
        DB::beginTransaction();
        try {
            $user_data = [
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone_number' => $request->phone_number,
            ];
            $user = $this->auth->register($user_data);
            $this->auth->assignRole($user, 'user');
            DB::commit();
            $activation_code = $this->auth->createActivation($user);
//            event(new InitiateAccountActivation($user_data['email'], $activation_code));
            return redirect()->route('home')->with('success', 'Registration Successful');
            // return redirect()->route('success')->with('success', 'Registration Successful');
        } catch (Exception $e) {
            DB::rollBack();
            return \redirect()->back()->with('errors', $e);
        }
    }

    public function register(): \Illuminate\Contracts\View\View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('site::auth.register');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        try {
            $username = $request->email;
            $password = $request->password;
            $remember = (bool)$request->get('remember_me', false);

            $user = $this->auth->login($username, $password, $remember);
            if ($user) {
                $user_data = auth()->user();
                return $this->getAuthRedirect($user_data);
            }
            return \redirect()->route('login')->with('errors', 'Invalid Credentials');

        } catch (Exception $e) {

            return Redirect::back()->with('errors', $e->getMessage());
        }
    }

    public function login(): \Illuminate\Contracts\View\View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('site::auth.login');
    }

    /**
     * @param $user
     * @return RedirectResponse
     */
    private function getAuthRedirect($user): RedirectResponse
    {
        return redirect()->intended(route('dashboard'))
            ->with('user', $user);


    }

    public function getLogOut(): RedirectResponse
    {
        $this->auth->logout();
        return redirect()->route('home');
    }

    public function verify($code): RedirectResponse
    {
        $verify = $this->auth->activate($code);
        if (!$verify) {
            return \redirect()->route('home')->with('errors', 'Invalid token or token expired, Another token has been sent.');
        }
        return \redirect()->route('home')->with('success', 'Verification Successful');
    }

}
