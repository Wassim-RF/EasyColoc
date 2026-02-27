<?php
    namespace App\Services;

    use App\Models\Depense;

    class  DepenseServices {
        public function creation(array $data) {
            return Depense::create($data);
        }
    }