<?php

namespace Modules\Dashboard\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Investments\Interfaces\InvestmentsRepositoryInterface;

class DashboardController extends Controller
{
    /**
     * @var InvestmentsRepositoryInterface
     */
    protected $investment;

    public function __construct(InvestmentsRepositoryInterface $investmentsRepository)
    {
        $this->investment = $investmentsRepository;
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user_id = auth()->id();
        $myActivePlans = DB::table('payments')->where('user_id', $user_id)->where('status', '', 'Approved')->where('approved_at', '>', Carbon::now())->get('investment_id');
        return view('dashboard::index')->with('myActivePlans', $myActivePlans);
    }

}
