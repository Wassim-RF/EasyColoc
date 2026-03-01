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

        public function loginMember() {
            return Membership::where('member_id' , auth()->id())->first();
        }

        public function quitterColocation($id) {
            $member = Membership::find($id);

            return $member->update([
                'isLeft' => true,
                'left_at' => now()
            ]);
        }
    }