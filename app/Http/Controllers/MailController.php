<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use App\Models\Colocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function inviteToColocation(Request $request) {
        $colocation = Colocations::find($request->colocationId);
        // dd($colocation);
        Mail::to($request->userInvitedEmail)->send(new InviteMail($colocation));
        return redirect()->back();
    }
}
