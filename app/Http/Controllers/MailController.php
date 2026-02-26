<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use App\Models\Colocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use URL;

class MailController extends Controller
{
    public function inviteToColocation(Request $request) {
        $colocation = Colocations::find($request->colocationId);
        $link = URL::temporarySignedRoute(
            'colocation.invitation',
            now()->addDay(1),
            ['token' => $colocation->token]
        );
        // dd($colocation);
        Mail::to($request->userInvitedEmail)->send(new InviteMail($colocation , $link));
        return redirect()->back();
    }
}
