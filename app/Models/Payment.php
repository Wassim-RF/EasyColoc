<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount',
        'depense_id',
        'receiver_id',
        'isPayed',
        'payed_at'
    ];

    protected $casts = [
        'isPayed' => 'boolean',
        'payed_at' => 'datetime'
    ];

    public function depense() {
        return $this->belongsTo(Depense::class , 'depense_id');
    }

    public function receiver() {
        return $this->belongsTo(User::class , 'receiver_id');
    }
}
