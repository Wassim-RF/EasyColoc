<?php

namespace App\Http\Controllers;

use App\Services\PayementServices;
use Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(PayementServices $payementServices) {
        $user = Auth::user();
        $hasActiveColocation = $user->colocations()->where('isActive' , true)->exists();
        $activeColocation = $user->colocations()->where('isActive' , true)->first();
        $membership = $user->memberships()->where('colocation_id' , $activeColocation->id)->first();
        $payements = $payementServices->userPayment($membership->id);
        return view('user.colocation.payements' , compact('payements' , 'hasActiveColocation'));
    }

    public function toogleAsPayed(Request $request , PayementServices $payementServices) {
        $payementServices->toggleAsPayed($request->payement_id);
        return redirect()->back();
    }
}
