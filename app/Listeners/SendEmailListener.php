<?php

namespace App\Listeners;

use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle($event): void
    {
        Mail::to($event->getEnteredEmail())->send(new WelcomeEmail());
    }
}
