<?php

namespace Modules\Core\Events;

use Illuminate\Queue\SerializesModels;

class InitiateAccountActivation
{
    use SerializesModels;

    public string $email;
    public string $code;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email, $code)
    {
        $this->email = $email;
        $this->code = $code;
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
