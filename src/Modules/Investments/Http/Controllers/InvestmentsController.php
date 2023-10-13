<?php

namespace Modules\Investments\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Modules\Investments\Repositories\InvestmentsRepository;

class InvestmentsController extends Controller
{
    /**
     * @var InvestmentsRepository
     */
    protected $investment;

    public function __construct(InvestmentsRepository $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $investments = $this->investment->activePlans();
        return view('investments::index')->with('investments', $investments);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'desc' => ['required', 'string'],
            'min_amount' => ['required', 'string'],
            'max_amount' => ['required', 'string'],
            'total_return' => ['required', 'string'],
            'daily_interest' => ['required', 'numeric'],
            'term_days' => ['required', 'numeric'],
        ]);
        if ($validator->failed()) {
            return redirect()->back()->withErrors($validator);
        }
        $this->investment->create($validator->validated());
        return redirect()->back()->with('success', 'Investment plan added successfully');
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     * @throws ValidationException
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'desc' => ['required', 'string'],
            'min_amount' => ['required', 'string'],
            'max_amount' => ['required', 'string'],
            'total_return' => ['required', 'string'],
            'daily_interest' => ['required', 'numeric'],
            'term_days' => ['required', 'numeric']
        ]);
        if ($validator->failed()) {
            return redirect()->back()->withErrors($validator);
        }
        $id = $request['id'];
        $this->investment->edit($id, $validator->validated());
        return redirect()->back()->with('success', 'Investment plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->investment->delete($id);
        return redirect()->back()->with('success', 'Investment plan deleted successfully');
    }

    public function viewAll()
    {
        $investments = $this->investment->all();
        return view('investments::viewAll')->with('investments', $investments);
    }

    public function deactivatePlan($id)
    {
        $this->investment->edit($id, ['status' => 'No']);
        return redirect()->back()->with('success', 'Investment plan updated successfully');
    }

    /**
     *getPlan method
     * This handles the purchase of plans by users
     */
    public function getPlan($id)
    {
        DB::table('payments')
            ->insert(
                [
                    'user_id' => auth()->id(),
                    'investment_id' => $id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        return redirect()->back()->with('success', 'Offer made successfully, await confirmation');

    }

    public function myPlans()
    {
        $user_id = Auth::id();
        //User plans based on status
        $myActivePlans = DB::table('payments')->where('user_id', $user_id)->where('status', 'Approved')->get();
        $myEndedPlans = DB::table('payments')->where('user_id', $user_id)->where('status', 'Approved')->where('approved_at', '<', Carbon::now())->get();
        $myInactivePlans = DB::table('payments')->where('user_id', $user_id)->where('status', 'Pending')->get();

        // This get the count of each plan status
        $activePlansCount = count($myActivePlans);
        $endedPlansCount = count($myEndedPlans);
        $inactivePlansCount = count($myInactivePlans);
        //dd($myActivePlans);
        return view('investments::myPlans')->with('myEndedPlans', $myEndedPlans)
            ->with('myInactivePlans', $myInactivePlans)
            ->with('myActivePlans', $myActivePlans)
            ->with('activePlansCount', $activePlansCount)
            ->with('inactivePlansCount', $inactivePlansCount)
            ->with('endedPlansCount', $endedPlansCount);

        //Getting plans data and passing it to an array
        /*$activePlans = [];
        $InactivePlans = [];
        $endedPlans = [];
        foreach ($myActivePlans as $activePlan) {
            $activePlans[] = $this->investment->show($activePlan[0]->investment_id);
        }
        foreach ($myInactivePlans as $InactivePlan) {
            $InactivePlans[] = $this->investment->show($InactivePlan->investment_id);
        }
        foreach ($myEndedPlans as $endedPlan) {
            $endedPlans[] = $this->investment->show($endedPlan[0]->investment_id);
        }
        dd($InactivePlans);
        // Passing it to view
        return view('investments::myPlans')->with('endedPlans', $endedPlans)->with('InactivePlans', $InactivePlans)->with('activePlans', $activePlans)->with('activePlansCount', $activePlansCount)->with('inactivePlansCount', $inactivePlansCount)->with('endedPlansCount', $endedPlansCount);
    */
    }

    public function viewPlan($id)
    {
        $investment = $this->investment->show($id);
        return view('investments::viewPlan')->with('investment', $investment);

    }

    public function planInfo($id)
    {
        $investment = $this->investment->show($id);
        return view('investments::planInfo')->with('investment', $investment);
    }

}
