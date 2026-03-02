<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\MembershipServices;
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

    public function toogleAsPayed(Request $request , PayementServices $payementServices , MembershipServices $membershipServices) {
        $payementServices->toggleAsPayed($request->payement_id);
        $payement = Payment::find($request->payement_id);
        $membershipServices->subSolde($payement->amount , $payement->receiver_id);
        return redirect()->back();
    }
}
