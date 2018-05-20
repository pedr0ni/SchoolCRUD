<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Aluno;

class AlunoController extends Controller {

    public function showList() {
        return view("alunos_list", ['Alunos' => Aluno::where('org_id', Auth::user()->org()->id)->get()]);
    }

}