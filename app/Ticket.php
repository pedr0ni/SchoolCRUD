<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'sdl_tickets';
    public $timestamps = false;
    protected $fillable = ['user_id', 'text', 'resp', 'created', 'updated', 'status'];
}
