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
}
