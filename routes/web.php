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

//Roda destinada 
Route::resource('produtos', ProdutoController::class);


Route::resource('pedido', PedidoController::class);
