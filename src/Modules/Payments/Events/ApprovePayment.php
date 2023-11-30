<?php

namespace Modules\Payments\Events;

use Illuminate\Queue\SerializesModels;

class ApprovePayment
{
    use SerializesModels;

    public string $email;
    public string $amount;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email, $amount)
    {
        $this->email = $email;
        $this->amount = $amount;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
