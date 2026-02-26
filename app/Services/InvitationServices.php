<?php
    namespace App\Services;

    use App\Models\Invitation;
    use DateTime;
    use URL;

    class InvitationServices {
        public function generateLink($token) {
            return URL::route(
                'colocation.invitation',
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

        public function acceptUpdateInvitation($id) {
            return Invitation::find($id)->update([
                'reponse' => 'refuse',
                'used_at' => new DateTime('now'),
                'isUsed' => true
            ]);
        }
        public function refuseUpdateInvitation($id) {
            return Invitation::find($id)->update([
                'reponse' => 'accept',
                'used_at' => new DateTime('now'),
                'isUsed' => true
            ]);
        }
    }