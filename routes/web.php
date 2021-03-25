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

Route::get ('/menu', '\App\Http\Controllers\CadastroController@menu')->name('carregarMenu');

Route::get ('/cadastrar', '\App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');
Route::post ('/cadastro-carregar', '\App\Http\Controllers\CadastroController@form')->name('form');

Route::get ('/mostrarDados', '\App\Http\Controllers\CadastroController@mostrarDados')->name('dados');

Route::get ('/listaUser', '\App\Http\Controllers\CadastroController@listaUser')->name('carregarLista');

