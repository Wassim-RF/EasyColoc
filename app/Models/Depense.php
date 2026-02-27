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

    public function payer() {
        return $this->belongsTo(User::class , 'payeur_id');
    }

    public function colocation() {
        return $this->belongsTo(Colocations::class , 'colocation_id');
    }

    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
