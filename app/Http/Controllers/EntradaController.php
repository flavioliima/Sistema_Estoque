<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\Movimentacao;
use App\Models\TipoEstoque;
use Illuminate\Http\Request;

class EntradaController extends Controller
{

    public function movimentacao()
    {
        $movimentacao = Movimentacao::query()->orderBy('tipo_movimentacao')->get();

        $mensagemSucesso = session('mensagem.sucesso');
        return view('movimentacao.movimentacao', compact('mensagemSucesso', 'movimentacao'));
    }


    public function listandoProdutos()
    {

    }

    public function index()
    {

    }

    public function create()
    {

        return view('movimentacao.entrada');
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $entrada = Movimentacao::create($params);

        return to_route('movimentacao.index')->with('mensagem.sucesso', "Entrada de: $entrada->descricao com sucesso!");
    }
}
