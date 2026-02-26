<?php
    namespace App\Http\Controllers;

    use App\Models\Colocations;
    use App\Models\Membership;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard() {
            if (!Membership::where('member_id' , auth()->id())->exists()) {
                return view('user.addColocation');
            } else {
                $membership = Membership::where('member_id' , auth()->user()->id)->first();
                $colocation = Colocations::find($membership->colocation_id);
                $isOwner= $membership->isOwner;
                return view('user.colocation.home' , compact('colocation' , 'isOwner'));
            }
        }
    }