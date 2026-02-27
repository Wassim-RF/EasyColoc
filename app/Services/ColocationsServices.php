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

        public function getAllMemberInColocation($colocation_id) {
            return Membership::where('colocation_id' , $colocation_id)->get();
        }

        public function desactiveColocarion($id) {
            return Colocations::find($id)->update([
                'isActive' => false
            ]);
        }
    }