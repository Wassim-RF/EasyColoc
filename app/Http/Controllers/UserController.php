<?php
    namespace App\Http\Controllers;

    use App\Models\Membership;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard() {
            if (!Membership::where('member_id' , auth()->id())->exists()) {
                return view('user.addColocation');
            } else {
                return view('user.colocation.home');
            }
        }
    }