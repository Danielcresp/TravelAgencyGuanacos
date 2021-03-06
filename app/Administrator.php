<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    //
        use Notifiable;
    protected $fillable = ['name',
                           'phone',
                           'email',
                           'password'];

       protected $hidden = [
        'password', 'remember_token',
    ];
}
