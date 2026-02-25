<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColocationRequest;
use App\Mail\InviteMail;
use App\Models\Colocations;
use App\Services\ColocationsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Str;

class ColocationsController extends Controller
{
    public function store(ColocationsServices $colocationsServices , ColocationRequest $colocationRequest) {
        $this->authorize('create' , Colocations::class);
        $data = [
            'name' => $colocationRequest->name,
            'colocationToken' => strtoupper(Str::random(6))
        ];

        $colocationsServices->creation($data);

        return redirect()->back()->with('succes' , 'creation du colocation en success');
    }
}
