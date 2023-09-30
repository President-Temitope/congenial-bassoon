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
        $data = [];
        $user_id = auth()->id();
        if (auth()->user()->getRoleNames() === 'user') {
            $data[] = DB::table('payments')->where('user_id', $user_id)->where('status', '', 'Approved')->where('approved_at', '>', Carbon::now())->get('investment_id');
        }
        $data[] = ['available_balance' => null];

        return view('dashboard::index')->with('data', $data);
    }

}
