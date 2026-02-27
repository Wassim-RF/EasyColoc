<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepenseRequest;
use App\Models\Colocations;
use App\Models\Membership;
use App\Services\CategoryServices;
use App\Services\ColocationsServices;
use App\Services\DepenseServices;
use App\Services\PayementServices;
use Illuminate\Http\Request;

class DepenseController extends Controller
{

    public function store(Request $request , DepenseServices $depenseServices , ColocationsServices $colocationsServices , PayementServices $payementServices) {
        $members = $colocationsServices->getAllMemberInColocation($request->colocation_id);
        $data = [
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'payeur_id' => auth()->user()->id,
            'colocation_id' => $request->colocation_id
        ];

        $depense = $depenseServices->creation($data);

        $memberNum = count($members);

        $payementData = [];

        foreach($members as $member) {
            if($member->id != auth()->id()) {
                $payementData[] = [
                    'amount' => $request->amount / $memberNum,
                    'depense_id' => $depense->id,
                    'receiver_id' => $member->id
                ];
            }
        }

        $payementServices->creation($payementData);

        return redirect()->back();
    }
}
