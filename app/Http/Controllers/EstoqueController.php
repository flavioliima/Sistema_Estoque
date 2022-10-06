<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueFormRequest;
use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\TipoEstoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstoqueController extends Controller
{

    public function index(Request $request)
    {
        $estoques = Estoque::query()->orderBy('id')->get();

        //retornando a mensagem de sucesso do metodo destroy
        $mensagemSucesso = session('mensagem.sucesso');

        return view('estoque.listar-estoque', compact('estoques', 'mensagemSucesso'));
    }


    public function create()
    {
        return view('estoque.novo-produto-estoque');
    }


    public function store(EstoqueFormRequest $request)
    {
        $params = $request->except('_token');
        $produtoEstoque = Estoque::create($params);

        //Retornando e redirecionando para a listagem, gerando uma mensagem de sucesso após exclusão, utlizizando a funcao ->with();
        return to_route('estoques.index')->with('mensagem.sucesso', "{$produtoEstoque->nome_produto} inserido no estoque com sucesso!");

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $produto = Estoque::find($id);
        return view('estoque.editar-produto', compact('produto'));
    }


    public function update(Estoque $estoque, EstoqueFormRequest $request)
    {
        $estoque->fill($request->all());
        $estoque->update();
        return to_route('estoques.index')->with('mensagem.sucesso', " Produto editado para {$estoque->nome_produto} com sucesso!");
    }


    public function destroy($id, Request $request)
    {
        $idProduto = Estoque::find($id);
        $idProduto->delete();

        //Retornando e redirecionando para a listagem, gerando uma mensagem de sucesso após exclusão, utlizizando a funcao ->with();
        return to_route('estoques.index')->with('mensagem.sucesso', "{$idProduto->nome_produto} removido do estoque com sucesso!");
    }

    public function ListarProdutosJson()
    {
        $listarProdutosJson = Estoque::all();

        return $listarProdutosJson;
    }



}
