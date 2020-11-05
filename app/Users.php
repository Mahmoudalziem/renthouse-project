<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'renters';
    
    protected $fillable = ['name', 'email','account_active','houses', 'account_verify', 'password','avatar'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
