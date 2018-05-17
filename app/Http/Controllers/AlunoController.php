<?php 

namespace App\Http\Controllers;

use App\Aluno;

class AlunoController extends Controller {

    public function showList() {
        return view("alunos_list", ['Alunos' => Aluno::all()]);
    }

}