<?php
    namespace App\Services;

    use App\Models\Invitation;
    use URL;

    class InvitationServices {
        public function generateLink($colocation) {
            return URL::temporarySignedRoute(
                'colocation.invitation',
                now()->addDay(1),
                ['token' => $colocation->token]
            );
        }

        public function createInvitation($colocation , $invitedEmail) {
            return Invitation::create([
                'colocation_id' => $colocation->id,
                'email' => $invitedEmail,
                'expires_at' => now()->addDay()
            ]);
        }
    }