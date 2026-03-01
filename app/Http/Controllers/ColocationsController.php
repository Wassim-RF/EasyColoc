<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColocationRequest;
use App\Mail\InviteMail;
use App\Models\Colocations;
use App\Services\CategoryServices;
use App\Services\ColocationsServices;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Str;

class ColocationsController extends Controller
{
    public function index($id) {
        $user = Auth::user();
        $hasActiveColocation = $user->colocations()->where('isActive' , true)->exists();

        return view('user.colocation.voirColocation.home' , compact('hasActiveColocation' , 'id'));
    }

    public function store(ColocationsServices $colocationsServices , ColocationRequest $colocationRequest) {
        $this->authorize('create' , Colocations::class);
        $data = [
            'name' => $colocationRequest->name
        ];

        $colocationsServices->creation($data);

        return redirect('home')->with('succes' , 'creation du colocation en success');
    }

    public function desactiveColocation(Request $request , ColocationsServices $colocationsServices) {
        $colocationsServices->desactiveColocation((int) $request->colocation_id);
        return redirect('home');
    }
}
