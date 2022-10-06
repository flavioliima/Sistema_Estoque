<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\TipoEstoque;
use Illuminate\Http\Request;

class TipoEstoqueController extends Controller
{

    public function index()
    {
        $tipoEstoques = TipoEstoque::query()->where('ativo', '!=', false)->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('tipo_estoque.listar-tipo-estoque', compact('tipoEstoques', 'mensagemSucesso'));
    }


    public function create()
    {
        return view('tipo_estoque.tipo-estoque');
    }


    public function store(Request $request)
    {
        $tipoEstoque = TipoEstoque::create($request->all());

        return to_route('tipoEstoques.index')->with('mensagem.sucesso', "O tipo de estoque $tipoEstoque->descricao, criado com sucesso!");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function ListarTipoEstoquesJson()
    {
        $listarTipoEstoquesJson = TipoEstoque::all();
        return $listarTipoEstoquesJson;
    }
}
