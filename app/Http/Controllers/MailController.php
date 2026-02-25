<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function inviteToColocation(Request $request) {
        Mail::to($request->userInvitedEmail)->send(new InviteMail());
        return redirect()->back();
    }
}
