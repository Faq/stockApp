<?php

namespace App\Http\Controllers;

use App\Events\SendTestEmailEvent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        event(new SendTestEmailEvent($request->get('email')));
        return redirect()->route("email", $request->get("email"));
    }

    public function showForm()
    {
        return view("Welcome");
    }
}
