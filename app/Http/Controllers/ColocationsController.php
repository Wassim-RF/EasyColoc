<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColocationRequest;
use App\Services\ColocationsServices;
use Illuminate\Http\Request;

class ColocationsController extends Controller
{
    public function store(ColocationsServices $colocationsServices , ColocationRequest $colocationRequest) {
        $data = [
            'name' => $colocationRequest->name
        ];

        $colocationsServices->creation($data);

        return redirect()->back()->with('succes' , 'creation du colocation en success');
    }
}
