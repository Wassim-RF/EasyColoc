<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepenseRequest;
use App\Models\Colocations;
use App\Models\Membership;
use App\Services\CategoryServices;
use App\Services\ColocationsServices;
use App\Services\DepenseServices;
use App\Services\MembershipServices;
use App\Services\PayementServices;
use Auth;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function index($id , CategoryServices $categoryServices) {
        $categories = $categoryServices->getAllCategory();
        $user = Auth::user();
        $hasActiveColocation = $user->colocations()->where('isActive' , true)->exists();
        return view('user.colocation.addDepenses' , compact('hasActiveColocation' , 'id' , 'categories'));
    }

    public function store(Request $request , DepenseServices $depenseServices , ColocationsServices $colocationsServices , PayementServices $payementServices , MembershipServices $membershipServices) {
        $user = Auth::user();
        $user->memberships()->update([
            'solde' => $user->solde - $request->amount
        ]);
        $members = $colocationsServices->getAllMemberInColocation($request->colocation_id);
        $loginMember = $membershipServices->loginMember();
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
            if($member->id != $loginMember->id) {
                $membershipServices->addSolde($request->amount / $memberNum , $member->id);
                $payementData[] = [
                    'amount' => $request->amount / $memberNum,
                    'depense_id' => $depense->id,
                    'receiver_id' => $member->id
                ];
            }
        }

        if(!empty($payementData)) {
            $payementServices->creation($payementData);
        }

        return redirect()->back();
    }
}
