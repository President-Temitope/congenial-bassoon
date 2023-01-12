<?php

namespace Modules\Payments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Core\Interfaces\CoreRepositoryInterface;
use Modules\Payments\Entities\Payment;


class PaymentsController extends Controller
{
    protected $model, $core;

    public function __construct(CoreRepositoryInterface $core, Payment $payment)
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
        return view('payments::index')->with('payments', $payments);
    }

    /**
     * Approve Payment.
     * @param int $id
     * @return Renderable
     */
    public function approvePayment($id)
    {
        $this->core->update($this->model, $id, ['status' => 'Approved']);
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
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Add Payment
     */
    public function addPayment(Request $request)
    {
        //dd($request);
        $uploadedFile = $request->file('fileupload');
        $filename = auth()->user()->fullName() . '_' . time() . '_' . $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'files/' . 'proof_of_payment',
            $uploadedFile,
            $filename
        );
        $data = [
            'username' => auth()->user()->fullName(),
            'user_id' => auth()->id(),
            'investment_id' => $request->investment_id,
            'investment_name' => $request->investment_name,
            'proof_of_payment' => $filename
        ];
        $this->core->create($this->model, $data);
        return redirect('/investments/myPlans');
    }
}
