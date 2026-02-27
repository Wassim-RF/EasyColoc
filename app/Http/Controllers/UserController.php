<?php
    namespace App\Http\Controllers;

    use App\Models\Colocations;
    use App\Models\Membership;
    use App\Services\CategoryServices;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard(CategoryServices $categoryServices) {
            if (!Membership::where('member_id' , auth()->id())->exists()) {
                return view('user.addColocation');
            } else {
                $categories = $categoryServices->getAllCategory();
                $membership = Membership::where('member_id' , auth()->user()->id)->first();
                $colocation = Colocations::find($membership->colocation_id);
                $isOwner= $membership->isOwner;
                return view('user.colocation.home' , compact('colocation' , 'isOwner' , 'categories'));
            }
        }
    }