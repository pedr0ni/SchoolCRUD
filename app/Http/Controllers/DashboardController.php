<?php

namespace App\Http\Controllers;

use App\Module;

class DashboardController extends Controller {

    public function showDashboard() {

        return view("dashboard", ['modules' => Module::all()]);
    }

}