<?php
    namespace App\Services;

    use App\Models\Colocations;
    use App\Models\User;

    class ColocationsServices {
        public function creation(array $data) {
            return Colocations::create($data);
        }
    }