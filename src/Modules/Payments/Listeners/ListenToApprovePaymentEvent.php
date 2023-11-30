<?php

namespace Modules\Payments\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Modules\Payments\Events\ApprovePayment;

class ListenToApprovePaymentEvent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(ApprovePayment $event)
    {
        $data = [
            'email' => $event->email,
            'amount' => $event->amount
        ];
        $email = $data['email'];
        try {
            Mail::send('core::emails.approve-email', $data, function ($message) use ($email) {
                $message->to($email);
                $message->subject('Deposit Successful');
            });
        } catch (\Exception $exception) {
            Log::info($exception);
        }
    }
}
