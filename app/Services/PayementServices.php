<?php
    namespace App\Services;

    use App\Models\Payment;

    class PayementServices {
        public function creation(array $data) {
            return Payment::insert($data);
        }

        public function userPayment() {
            return Payment::where('receiver_id' , auth()->user()->id)->get();
        }
    }