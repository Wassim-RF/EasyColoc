<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepenseRequest;
use App\Models\Colocations;
use App\Models\Membership;
use App\Services\CategoryServices;
use App\Services\DepenseServices;

class DepenseController extends Controller
{
    public function index(CategoryServices $categoryServices) {
        $categories = $categoryServices->getAllCategory();
        $membership = Membership::where('member_id' , auth()->user()->id)->first();
        $colocation = Colocations::find($membership->colocation_id);
        return view('user.colocation.depense.creation' , compact('categories' , 'colocation'));
    }
    public function store(DepenseRequest $depenseRequest , DepenseServices $depenseServices) {
        $data = [
            'title' => $depenseRequest->title,
            'amount' => $depenseRequest->amount,
            'category_id' => $depenseRequest->category_id,
            'payeur_id' => auth()->user()->id,
            'colocation_id' => $depenseRequest->colocation_id
        ];

        dd($data);

        $depenseServices->creation($data);

        return redirect()->back();
    }
}
