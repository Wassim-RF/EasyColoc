<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        'colocation_id',
        'reponse',
        'email',
        'token',
        'used_at',
        'expires_at'
    ];

    public function colocation() {
        return $this->belongsTo(Colocations::class , 'colocation_id');
    }
}
