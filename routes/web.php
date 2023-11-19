<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProdutoController, PedidoController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/cadastrar/produto');
});

//Visualizar todos produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

//Cadastrar um produto - View
Route::get('produto/cadastrar', [ProdutoController::class, 'create']);

//Cadastrar um produto - Post
Route::post('produto/cadastrar', [ProdutoController::class, 'store']);

//Visualizar um produto em específico
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

//Visualizar todos pedidos
Route::get('/', [PedidoController::class, 'index']);

//Cadastrar um produto - View
Route::get('pedido/cadastrar', [PedidoController::class, 'create']);

//Cadastrar um produto - Post
Route::post('pedido/cadastrar', [PedidoController::class, 'store']);

//Visualizar um produto em específico
Route::get('/pedido/{id}', [PedidoController::class, 'show']);
