<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class APIController extends Controller {

    public function clearNotify() {
        Auth::user()->clearNotify();
        return response()->json(['result'=>'success']);
    }

}