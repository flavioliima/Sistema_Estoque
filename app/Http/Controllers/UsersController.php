<?php

namespace App\Http\Controllers;

use App\Mail\UsersCreated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('usuario.form-usuario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'nome.required'=> 'O campo nome precisa ser preenchido',
            'email.required'=> 'O campo email precisa ser preenchido',
            'password.required'=> 'O campo senha precisa ser preenchido',

        ]);

        $novoUsuario =  $request->except('_token');
        $novoUsuario['password'] = Hash::make($novoUsuario['password']);
        User::create($novoUsuario);

//        $email = new UsersCreated(
//            'Teste',
//            'estoque.index'
//        );
//        Mail::to($request->user())->send($email);

       return view('principal');
    }
}
