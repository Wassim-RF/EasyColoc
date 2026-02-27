<?php

namespace App\Http\Controllers;

use App\Services\PayementServices;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(PayementServices $payementServices) {
        $payements = $payementServices->userPayment();
        return view('user.colocation.payements' , compact('payements'));
    }

    public function toogleAsPayed(Request $request , PayementServices $payementServices) {
        $payementServices->toggleAsPayed($request->payement_id);
        return redirect()->back();
    }
}
