<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API para mostrar todas as informações das tabelas
Route::get('/categoria','App\Http\Controllers\CategoriaController@indexApi');

Route::get('/cliente','App\Http\Controllers\ClienteController@indexApi');

Route::get('/fornecedor','App\Http\Controllers\FornecedorController@indexApi');

Route::get('/produto','App\Http\Controllers\ProdutoController@indexApi');


//API para mostrar os nomes específicos
Route::get('/categoria/nome','App\Http\Controllers\CategoriaController@apiNome');

Route::get('/cliente/nome','App\Http\Controllers\ClienteController@apiNome');

Route::get('/fornecedor/nome','App\Http\Controllers\FornecedorController@apiNome');

Route::get('/produto/nome','App\Http\Controllers\ProdutoController@apiNome');

//API para mostrar os Ids escolhidos
Route::get('/categoria/id_categoria','App\Http\Controllers\CategoriaController@apiId');

Route::get('/cliente/id_cliente','App\Http\Controllers\ClienteController@apiId');

Route::get('/fornecedor/id_fornecedor','App\Http\Controllers\FornecedorController@apiId');

Route::get('/produto/id_produto','App\Http\Controllers\ProdutoController@apiId');
