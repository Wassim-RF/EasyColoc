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
        'solde'
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class , 'member_id');
    }

    public function colocation() {
        return $this->belongsTo(Colocations::class , 'colocation_id');
    }
}
