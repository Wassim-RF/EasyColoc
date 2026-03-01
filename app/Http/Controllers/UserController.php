<?php
    namespace App\Http\Controllers;

    use App\Models\Colocations;
    use App\Models\Membership;
    use App\Services\CategoryServices;
    use App\Services\ColocationsServices;
    use Auth;

    class UserController extends Controller {
        public function index() {
            return view('welcome');
        }

        public function userDashboard(CategoryServices $categoryServices , ColocationsServices $colocationsServices) {
            $user = Auth::user();
            $hasActiveColocation = $user->colocations()->where('isActive' , true)->exists();
            if (!$hasActiveColocation) {
                return view('user.notInColocation' , compact('hasActiveColocation'));
            } else {
                $membership = Membership::where('member_id' , $user->id)->first();
                $colocation = Colocations::find($membership->colocation_id);
                $totalDepence = $colocationsServices->totalDepense($colocation->id);
                $totalDepenceMonth = $colocationsServices->totalDepenseCeMois($colocation->id);
                $members = $colocationsServices->members($colocation->id);
                $membersNum = $colocationsServices->membersNum($colocation->id);
                $isOwner= $membership->isOwner;
                $payements = $colocationsServices->payements($colocation->id);
                return view('user.colocation.home' , compact('colocation' , 'isOwner' , 'hasActiveColocation' , 'totalDepence' , 'totalDepenceMonth' , 'members' , 'membersNum' , 'payements'));
            }
        }

        public function addColocationView() {
            return view('user.addColocation');
        }

        public function returnToHome() {
            return redirect('home');
        }
    }