<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'lastname',
        'country',
        'age',
        'carrer',
        'semester',
        'email',
        'city',


    ];

    public function technologies(){
        return $this->hasMany(Technologies::class);
    }
    public function networks(){
        return $this->hasMany(Networks::class);
    }
    public function interests(){
        return $this->hasMany(Interests::class);
    }
}
