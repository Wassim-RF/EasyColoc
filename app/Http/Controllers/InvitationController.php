<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use URL;

class InvitationController extends Controller
{
    public function index($token , Request $request) {
        if (!Auth::check()) {
            session(['invite_token' => $token]);

            return redirect()->route('view.auth.login');  
        }

        if (!URL::hasValidSignature($request)) {
            return redirect('/');
        }

        return view('user.colocation.invite');
    }
}
