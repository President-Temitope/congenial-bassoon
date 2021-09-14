<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Users\Interfaces\UsersRepositoryInterface;

class UsersController extends Controller
{
    protected $user = '';

    public function __construct(UsersRepositoryInterface $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users::index')->with('users', $users);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function profile()
    {
        $id = Auth::id();
        $user = $this->user->show($id);
       // dd($user);
        return view('users::profile')->with('user', $user);
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        User::destroy($id);
    }
}
