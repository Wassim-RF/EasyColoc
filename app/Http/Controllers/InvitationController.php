<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index($token) {
        if (!Auth::check()) {
            session(['invite_token' => $token]);

            return redirect()->route('view.auth.login');  
        }
        return view('user.colocation.invite');
    }
}
