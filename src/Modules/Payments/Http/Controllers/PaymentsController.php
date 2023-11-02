<?php

namespace Modules\Payments\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Interfaces\CoreRepositoryInterface;
use Modules\Investments\Interfaces\InvestmentsRepositoryInterface;
use Modules\Payments\Entities\Payment;
use Modules\Payments\Events\ApprovePayment;
use Modules\Users\Interfaces\UsersRepositoryInterface;


class PaymentsController extends Controller
{
    protected $model, $core, $user, $investment;

    public function __construct(CoreRepositoryInterface $core, Payment $payment, UsersRepositoryInterface $user, InvestmentsRepositoryInterface $investmentsRepository)
    {
        $this->model = $payment;
        $this->core = $core;
        $this->user = $user;
        $this->investment = $investmentsRepository;

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $payments = $this->core->all($this->model);
        $investments = $this->investment->all();
        $users = $this->user->all();
        return view('payments::index')
            ->with('payments', $payments)
            ->with('investments', $investments)
            ->with('users', $users);
    }

    /**
     * Approve Payment.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approvePayment($id, $email)
    {
        $this->core->update($this->model, $id, ['status' => 'Approved', 'approved_at' => Carbon::now()]);

        event(new ApprovePayment($email));
        return redirect()->back()->with('success', 'Updated!');
    }

    /**
     * Transaction history.
     * @return Renderable
     */
    public function transactionHistory()
    {
        //
    }

    /**
     * Delete Payment.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePayment(Request $request)
    {
        if ($request->user_id) {
            $investment = $this->investment->show($request->investment_id);
            $user = $this->user->show($request->user_id);
            $this->core->create($this->model, [
                'amount' => $request->amount,
                'available_balance' => $request->available_balance,
                'total_invested' => $request->total_invested,
                'total_profit' => $request->total_profit,
                'available_fund' => $request->available_fund,
                'invested_fund' => $request->invested_fund,
                'this_month_profit' => $request->this_month_profit,
                'balance_in_account' => (int)$request->available_fund + (int)$request->invested_fund,
                'investment_id' => $request->investment_id,
                'user_id' => $request->user_id,
                'username' => $user->fullName(),
                'user_email' => $user->email,
                'investment_name' => $investment->name,
                'approved_at' => Carbon::now()

            ]);
        } else {
            $this->core->update($this->model, $request->id, ['status' => 'Approved',
                'amount' => $request->amount,
                'available_balance' => $request->available_balance,
                'total_invested' => $request->total_invested,
                'total_profit' => $request->total_profit,
                'available_fund' => $request->available_fund,
                'invested_fund' => $request->invested_fund,
                'this_month_profit' => $request->this_month_profit,
                'balance_in_account' => (int)$request->available_fund + (int)$request->invested_fund,

            ]);
        }

        return redirect()->back()->with('success', 'Updated!');
    }

    /**
     * Add Payment
     */
    public function addPayment(Request $request)
    {

        $data = [
            'username' => auth()->user()->fullName(),
            'user_email' => auth()->user()->email,
            'user_id' => auth()->id(),
            'investment_id' => $request->investment_id,
            'investment_name' => $request->investment_name,
            'proof_of_payment' => $request->txn,
            'amount' => $request->custom_amount,
            'email' => $request->email,
        ];
        $this->core->create($this->model, $data);
        return redirect('/investments/myPlans');
    }

    public function destroy($id)
    {
        $this->core->delete($this->model, $id);
        return redirect()->back()->with('success', 'Updated!');
    }
}
