<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Aluno;

class DashboardController extends Controller {

    public function showDashboard() {
        return view("dashboard", ['AlunoAll' => Aluno::where('org_id', Auth::user()->org()->id)->get()]);
    }

}