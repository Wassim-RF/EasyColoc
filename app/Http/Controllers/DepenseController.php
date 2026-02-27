<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepenseRequest;
use App\Models\Colocations;
use App\Models\Membership;
use App\Services\CategoryServices;
use App\Services\ColocationsServices;
use App\Services\DepenseServices;
use Illuminate\Http\Request;

class DepenseController extends Controller
{

    public function store(Request $request , DepenseServices $depenseServices , ColocationsServices $colocationsServices) {
        $data = [
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'payeur_id' => auth()->user()->id,
            'colocation_id' => $request->colocation_id
        ];

        $depenseServices->creation($data);

        $memberNum = $colocationsServices->memberInColocation($request->colocation_id);

        return redirect()->back();
    }
}
