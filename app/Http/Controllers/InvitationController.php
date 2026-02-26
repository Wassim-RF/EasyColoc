<?php

namespace App\Http\Controllers;

use App\Models\Colocations;
use App\Models\Invitation;
use App\Models\Membership;
use App\Models\User;
use App\Services\InvitationServices;
use App\Services\MembershipServices;
use Auth;
use Illuminate\Http\Request;
use URL;

class InvitationController extends Controller
{
    public function index($token , Request $request) {
        $invitation = Invitation::where('token' , $token)->first();
        $targetedUser = User::where('email' , $invitation->email)->first();

        if (!Auth::check()) {
            session(['invite_token' => $token]);

            if (!$targetedUser) {
                return redirect()->route('view.auth.register');
            }

            return redirect()->route('view.auth.login');
        }

        $isMember = Membership::where('member_id' , $targetedUser->id)->exists();

        // URL Has a Correct Signature 
        if (!URL::hasValidSignature($request)) {
            return redirect('home');
        }

        // Invitation link is expired
        if ($invitation->expires_at->isPast()) {
            return redirect('home');
        }

        // Invitition link is used
        if ($invitation->isUsed) {
            return redirect('home');
        }

        // Targeted user is the same
        if (auth()->user()->email !== $invitation->email) {
            return redirect('home');
        }

        // Targeted user is a member in another Colocation
        if ($isMember) {
            return redirect('home');
        }

        $colocation = Colocations::find($invitation->colocation_id);

        return view('user.colocation.invite' , compact('colocation' , 'invitation'));
    }

    public function acceptInvitation(Request $request , InvitationServices $invitationServices , MembershipServices $membershipServices) {
        $invitationServices->acceptUpdateInvitation($request->invitationID);
        $membershipServices->acceptInvitation($request->colocationID);
        return redirect('home');
    }

    public function refuseInvitation(Request $request , InvitationServices $invitationServices) {
        $invitationServices->refuseUpdateInvitation($request->invitationID);
        return redirect('home');
    }
}
