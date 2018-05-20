<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'sdl_orgs';
    public $timestamps = false;
    protected $fillable = ['name','created','updated'];
}
