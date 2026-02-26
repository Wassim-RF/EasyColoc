<?php
    namespace App\Services;

    use App\Models\Membership;

    class MembershipServices {
        public function acceptInvitation($colocation_id) {
            return Membership::create([
                'member_id' => auth()->user()->id,
                'colocation_id' => $colocation_id,
                'isOwner' => false
            ]);
        }
    }