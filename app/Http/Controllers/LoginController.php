<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\User;

class LoginController extends Controller {

    public function login(Request $request) {
        if (Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])) {
            return response()->json([
                'result'=>'success',
                'message'=>'Usuário logado com sucesso. Redirecionando...',
                'logged_id'=>Auth::id()
            ]);
        }

        return response()->json([
            'result'=>'error',
            'message'=>'E-mail ou senha inválido(s)...'
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function register(Request $request) {
    }

}