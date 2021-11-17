<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendTestEmailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    private $email;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getEnteredEmail(): string
    {
        return $this->email;
    }
}
