<?php

namespace App\Http\Controllers;

use App\Module;

class StoreController extends Controller {

    public function showModules() {
        return view('store_modules', ['ModuleList'=>Module::all()]);
    }

    public function showHistory() {
        return view('store_history');
    }

}