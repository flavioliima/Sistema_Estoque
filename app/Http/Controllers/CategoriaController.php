<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::query()->where('ativo', '!=', false)->get();

        $mensagemSucesso = session('mensagem.sucesso');

        return view('categoria.listar-categoria', compact('categorias', 'mensagemSucesso'));
    }


    public function create()
    {
        return view('categoria.categoria');
    }


    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());


        return to_route('categorias.index')->with('mensagem.sucesso', "Categoria $categoria->descricao, criada com sucesso!");
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

    public function ListarCategoriasJson()
    {
        $listarCategoriasJson = Categoria::all();
        return $listarCategoriasJson;
    }
}
