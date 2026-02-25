<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocations extends Model
{
    protected $fillable = [
        'name',
        'status'
    ];

    public function members() {
        return $this->hasMany(Membership::class , 'colocation_id');
    }

    public function users() {
        return $this->belongsToMany(
            User::class , 
            'Membership' , 
            'colocation_id' , 
            'member_id'
        )->withPivot(
            'isOwner' , 
            'joined_at' , 
            'left_at'
        );
    }
}
