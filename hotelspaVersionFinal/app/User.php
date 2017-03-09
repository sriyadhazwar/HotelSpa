<?php

namespace HotelUnicorns;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'dni', 'password','rol'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
