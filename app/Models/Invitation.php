<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        'colocation_id',
        'reponse',
        'email',
        'used_at',
        'expires_at'
    ];
}
