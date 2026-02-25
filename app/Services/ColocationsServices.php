<?php
    namespace App\Services;

    use App\Models\Colocations;
    use App\Models\Membership;
    use App\Models\User;

    class ColocationsServices {
        public function creation(array $data) {
            $colocation = Colocations::create($data);
            Membership::create([
                'member_id' => auth()->user()->id,
                'colocation_id' => $colocation->id,
                'isOwner' => true
            ]);
            return $colocation;
        }

        // public function creerToken() {
        //     $caracters = 'ABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789';
        //     $code = '';

        //     for ($i = 0 ; $i < 5 ; $i++) {
        //         $code .= $caracters[rand(0 , strlen($caracters) - 1)];
        //     }

        //     return $code;
        // }
    }