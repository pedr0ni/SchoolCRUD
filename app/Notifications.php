<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'sdl_notifications';
    public $timestamps = false;
    protected $fillable = ['user_id', 'icon', 'color', 'text', 'time', 'active'];
}
