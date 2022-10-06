<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function autenticar(Request $request)
    {
        $_SESSION['nome_usuario'] = $request['email'];
        $params = $request->only(['email', 'password']);
        if (!Auth::attempt($params)){
            return redirect()->back()->withErrors('Usuario ou senha inválidos!');
        }

        return view('home');
    }

    public function sair()
    {
        Auth::logout();

        return to_route('login');
    }
}
