<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Module;

class UserModules extends Model
{
    protected $table = 'sdl_usermodules';
    public $timestamps = false;

    public function getModuleInfo() {
        return Module::find($this->module_id);
    }
}
