<?php

namespace App\Http\Controllers;

use App\Aluno;

class DashboardController extends Controller {

    public function showDashboard() {
        return view("dashboard", ['AlunoModel' => Aluno::all(), '']);
    }

}