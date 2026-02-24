<?php
    namespace App\Services;

    use App\Models\User;

    class RegisterServices {
        public function create(array $data) {
            return User::create($data);
        }
    }