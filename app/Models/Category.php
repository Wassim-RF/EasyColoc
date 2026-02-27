<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function depenses() {
        return $this->hasMany(Depense::class , 'category_id');
    }
}
