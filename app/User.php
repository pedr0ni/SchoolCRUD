<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'sdl_users';
    public $timestamps = false;

    protected $fillable = [
        'name', 'password', 'email', 'org_id', 'remember_token', 'created', 'updated'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
