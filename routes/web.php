<?php

use \App\Http\Controllers\EstoqueController;
use \App\Http\Controllers\TipoEstoqueController;
use \App\Http\Controllers\CategoriaController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\EntradaController;
use \App\Http\Controllers\SaidaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('autenticador');

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('autenticar');
Route::get('/logout', [LoginController::class, 'sair'])->name('sair')->middleware('autenticador');

//USUARIO
Route::resource('/usuarios', UsersController::class)->only('index', 'create', 'store')->middleware('autenticador');

//TIPO ESTOQUE
Route::resource('/tipoEstoques', TipoEstoqueController::class)->only('index', 'create', 'store')->middleware('autenticador');
Route::get('/estoques/ListarTipoEstoquesJson', [TipoEstoqueController::class, 'ListarTipoEstoquesJson'])->middleware('autenticador');

//CATEGORIA PRODUTOS
Route::resource('/categorias', CategoriaController::class)->only('index', 'create', 'store')->middleware('autenticador');
Route::get('/categorias/ListarCategoriasJson', [CategoriaController::class, 'ListarCategoriasJson'])->middleware('autenticador');

//ESTOQUE
Route::resource('/estoques', EstoqueController::class)->except('show')->middleware(\App\Http\Middleware\Autenticador::class)->middleware('autenticador');
Route::get('/estoques/ListarProdutosJson', [EstoqueController::class, 'ListarProdutosJson']);

//MOVIMENTAÇÃO
Route::get('/movimentacao', [EntradaController::class, 'movimentacao'])->name('movimentacao.index')->middleware('autenticador');

//ENTRADA E SAIDA
Route::resource('/entradas', EntradaController::class)->except('show')->middleware('autenticador');
Route::resource('/saidas', SaidaController::class)->only('create', 'store')->middleware('autenticador');


//EMAIL
Route::get('/email', function (){
    return new \App\Mail\UsersCreated(
        'João do bronks',
        'testei'
    );
});





