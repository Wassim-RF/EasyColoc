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
        'payed_at' => 'datetime'
    ];
}
