<?php
    namespace App\Services;

    use App\Models\Invitation;
    use URL;

    class InvitationServices {
        public function generateLink($colocation , $token) {
            return URL::temporarySignedRoute(
                'colocation.invitation',
                now()->addDay(),
                ['token' => $token]
            );
        }

        public function createInvitation($colocation , $invitedEmail , $token) {
            return Invitation::create([
                'colocation_id' => $colocation->id,
                'email' => $invitedEmail,
                'token' => $token,
                'expires_at' => now()->addDay()
            ]);
        }
    }