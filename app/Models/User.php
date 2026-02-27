<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'isBanned',
        'reputation'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function memberships() {
        return $this->hasMany(Membership::class , 'member_id');
    }

    public function colocations() {
        return $this->belongsToMany(
            Colocations::class,
            'memberships',
            'member_id',
            'colocation_id'
        )->withPivot(
            'isOwner' , 
            'joined_at' , 
            'left_at'
        );
    }

    public function depenses() {
        return $this->hasMany(Depense::class , 'payer_id');
    }

    public function payments() {
        return $this->hasMany(Payment::class , 'receiver_id');
    }
}
