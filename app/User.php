<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Organization;
use App\Notifications;
use App\UserModules;

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

    public function org() {
        return Organization::find($this->org_id);
    }

    public function listNotify() {
        return Notifications::where('user_id', $this->id)->orderBy('id','desc')->get();
    }

    public function clearNotify() {
        Notifications::where('user_id', $this->id)->delete();
    }

    public function createNotify($icon, $color, $text) {
        Notifications::create([
            'user_id'=>$this->id,
            'icon'=>$icon,
            'color'=>$color,
            'text'=>$text,
            'time'=>time(),
            'active'=>0
        ]);
    }

    public function hasModule($moduleId) {
        $tem = false;
        foreach (UserModules::where('user_id', $this->id)->where('module_id',$moduleId)->get() as $Module) {
            if (time() <= $Module->expires || $Module->expires == 0) {
                $tem = true;
            }
        }
        return $tem;
    }

    public function getModules() {
        return UserModules::where('user_id', $this->id)->get();
    }
}
