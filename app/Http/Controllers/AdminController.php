<?php

namespace App\Http\Controllers;

use App\Services\AdminServices;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(AdminServices $adminServices) {
        $totalUser = $adminServices->totalUser();
        $allUSers = $adminServices->getAllUser();
        $totalDepenses = $adminServices->totalDepenses();
        $colocationNumber = $adminServices->colocationNumber();
        $userBannedTotal = $adminServices->bannedUSerTotal();
        return view('admin.dashboard' , compact('allUSers' , 'colocationNumber' , 'totalDepenses' , 'totalUser' , 'userBannedTotal'));
    }
}
