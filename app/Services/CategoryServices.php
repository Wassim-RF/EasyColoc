<?php
    namespace App\Services;

    use App\Models\Category;


    class  CategoryServices {
        public function getAllCategory() {
            return Category::all();
        }
    }