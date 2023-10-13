<?php

namespace Modules\Payments\Events;

use Illuminate\Queue\SerializesModels;

class ApprovePayment
{
    use SerializesModels;

    public string $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
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
