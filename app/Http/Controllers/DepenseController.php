<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepenseRequest;
use App\Services\DepenseServices;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function store(DepenseRequest $depenseRequest , DepenseServices $depenseServices) {
        $data = [
            'title' => $depenseRequest->title,
            'amount' => $depenseRequest->amount,
            'category_id' => $depenseRequest->category_id,
            'payeur_id' => auth()->user()->id,
            'colocation_id' => $depenseRequest->colocation_id
        ];

        $depenseServices->creation($data);

        return redirect()->back();
    }
}
