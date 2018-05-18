<?php

namespace App\Http\Controllers;

use App\Aluno;

class DashboardController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function showDashboard() {
        return view("dashboard", ['AlunoAll' => Aluno::all()]);
    }

}