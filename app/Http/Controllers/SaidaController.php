<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use Illuminate\Http\Request;

class SaidaController extends Controller
{

    public function create()
    {
        return view('movimentacao.saida');
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $saida = Movimentacao::create($params);

        return to_route('movimentacao.index')->with('mensagem.sucesso', "Movimentação de saída criada com sucesso!");
    }
}
