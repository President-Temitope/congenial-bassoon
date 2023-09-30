<?php

namespace Modules\Core\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Modules\Core\Events\InitiateAccountActivation;

class ListenToAccountActivationEvent
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
     * @param InitiateAccountActivation $event
     * @return void
     */
    public function handle(InitiateAccountActivation $event)
    {
        $data = [
            'email' => $event->email,
            'code' => $event->code,
        ];
        $email = $data['email'];
        try {
            Mail::send('core::emails.verify-email', $data, function ($message) use ($email) {
                $message->to($email);
                $message->subject('Email Verification');
            });
        } catch (\Exception $exception) {
            Log::info($exception);
        }


    }
}
