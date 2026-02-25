<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'member_id',
        'colocation_id',
        'isOwner',
        'joined_at',
        'left_at'
    ];
}
