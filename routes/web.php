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

Route::post ('/salvar_usuario', '\App\Http\Controllers\CadastroController@salvar')->name('salvarUsuario');

Route::get ('/editarUser/{id}', '\App\Http\Controllers\CadastroController@editarUser')->name('editarUser');

Route::post ('/salvar_edicao', '\App\Http\Controllers\CadastroController@salvarEdicao')->name('salvarEdicao');

Route::get ('/excluirUser/{id}', '\App\Http\Controllers\CadastroController@excluirUser')->name('excluirUser');



Route::get ('/cadastrarEndereco', '\App\Http\Controllers\CadastroController@cadastrarEndereco')->name('cadastrarEndereco');
Route::post ('/endereco-carregar', '\App\Http\Controllers\CadastroController@formEnd')->name('formEnd');

Route::get ('/mostrarEndereco', '\App\Http\Controllers\CadastroController@mostrarEndereco')->name('endereco');

Route::get ('/listaEnd', '\App\Http\Controllers\CadastroController@listaEnd')->name('carregarEnd');

Route::post ('/salvar_usuario', '\App\Http\Controllers\CadastroController@salvar')->name('salvarUsuario');

Route::get ('/editarEnd/{id}', '\App\Http\Controllers\CadastroController@editarEnd')->name('editarEnd');

Route::post ('/salvar_end', '\App\Http\Controllers\CadastroController@salvarEnd')->name('salvarEnd');

Route::get ('/excluirEnd/{id}', '\App\Http\Controllers\CadastroController@excluirEnd')->name('excluirEnd');


Route::get ('/usuario-endereco', '\App\Http\Controllers\NovoController@usuarioEndereco')->name('usuarioEndereco');
Route::post ('/saveuser', '\App\Http\Controllers\NovoController@save')->name('saveUser');