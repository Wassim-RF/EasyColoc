<?php
    namespace App\Http\Controllers;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard() {
            return view('user.addColocation');
        }
    }