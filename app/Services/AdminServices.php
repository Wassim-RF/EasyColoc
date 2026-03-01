<?php
    namespace App\Services;

    use App\Models\Colocations;
    use App\Models\Depense;
    use App\Models\User;

    class AdminServices {
        public function getAllUser() {
            return User::where('role' , 'user')->get();
        }

        public function colocationNumber() {
            return Colocations::all()->count();
        }

        public function totalDepenses() {
            return Depense::sum('amount');
        }

        public function bannedUSerTotal() {
            return User::where('isBanned' , true)->count();
        }

        public function totalUser() {
            return User::all()->count();
        }

        public function toggleBan($id) {
            $user = User::find($id);
            
            return $user->update([
                'isBanned' => !$user->isBanned
            ]);
        }
    }