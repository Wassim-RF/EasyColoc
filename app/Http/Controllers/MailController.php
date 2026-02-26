<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use App\Models\Colocations;
use App\Services\InvitationServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Str;
use URL;

class MailController extends Controller
{
    public function inviteToColocation(Request $request , InvitationServices $invitationServices) {
        $colocation = Colocations::find($request->colocationId);
        $token = strtoupper(Str::random(6));
        $link = $invitationServices->generateLink($token);
        $invitationServices->createInvitation($colocation , $request->userInvitedEmail , $token);
        Mail::to($request->userInvitedEmail)->send(new InviteMail($colocation , $link));
        return redirect()->back();
    }
}
