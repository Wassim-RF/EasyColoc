<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = [
        'title',
        'colocation_id',
        'amount',
        'payeur_id',
        'category_id'
    ];
}
