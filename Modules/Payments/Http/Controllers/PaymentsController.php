<?php

namespace Modules\Payments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

use Illuminate\Routing\Controller;
use Modules\Core\Interfaces\CoreRepositoryInterface;
use Modules\Payments\Entities\Payment;


class PaymentsController extends Controller
{
    protected $model, $core;
    public function __construct(CoreRepositoryInterface $core,Payment $payment)
    {
     $this->model = $payment;
     $this->core = $core;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       $payments = $this->core->all($this->model);
        return view('payments::index')->with('payments',$payments);
    }

    /**
     * Approve Payment.
     * @param int $id
     * @return Renderable
     */
    public function approvePayment($id)
    {

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
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
