<?php
    namespace App\Http\Controllers;

    use App\Models\Colocations;
    use App\Models\Membership;
    use App\Services\CategoryServices;
    use Auth;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard(CategoryServices $categoryServices) {
            $user = Auth::user();
            $hasActiveColocation = $user->colocations()->where('isActive' , true)->exists();
            if (!$hasActiveColocation) {
                return view('user.notInColocation' , compact('hasActiveColocation'));
            } else {
                $categories = $categoryServices->getAllCategory();
                $membership = Membership::where('member_id' , $user->id)->first();
                $colocation = Colocations::find($membership->colocation_id);
                $isOwner= $membership->isOwner;
                return view('user.colocation.home' , compact('colocation' , 'isOwner' , 'categories' , 'hasActiveColocation'));
            }
        }

        public function addColocationView() {
            return view('user.addColocation');
        }

        public function returnToHome() {
            return redirect('home');
        }
    }