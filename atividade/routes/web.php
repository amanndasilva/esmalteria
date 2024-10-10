<?php

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
    return view('welcome');
});

//Rota dos produtos
Route::get('/produto','App\Http\Controllers\ProdutoController@index');
Route::post('/produto','App\Http\Controllers\ProdutoController@store');


//Rota das categorias
Route::get('/categoria','App\Http\Controllers\CategoriaController@index');
Route::post('/categoria','App\Http\Controllers\CategoriaController@store');

//Rota dos fornecedores
Route::get('/fornecedor','App\Http\Controllers\FornecedorController@index');
Route::post('/fornecedor','App\Http\Controllers\FornecedorController@store');


//Rota dos clientes
Route::get('/cliente','App\Http\Controllers\ClienteController@index');
Route::post('/cliente','App\Http\Controllers\ClienteController@store');



