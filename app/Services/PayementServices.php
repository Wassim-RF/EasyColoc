<?php
    namespace App\Services;

    use App\Models\Payment;
    use DateTime;

    class PayementServices {
        public function creation(array $data) {
            return Payment::insert($data);
        }

        public function userPayment($id) {
            return Payment::where('receiver_id' , $id)->where('isPayed' , false)->get();
        }

        public function toggleAsPayed($id) {
            return Payment::find($id)->update([
                'isPayed' => true,
                'payed_at' => now()
            ]);
        }
    }