<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class CadastroController extends Controller
{
    public function menu() {
        return view('menu');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function mostrarDados() {
        return view('cadastroCompleto');
    }

    public function listaUser() {
        $usuarios = Usuario::all();
        return view('listaUsuario', compact('usuarios'));
    }


    public function salvar(Request $request) {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        return view('cadastroCompleto', compact('usuario'));
    }

    public function form(Request $request){
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        return view('cadastroCompleto', compact('usuario'));
    }

    public function editarUser($id) {
        $usuario = Usuario::where('id', $id)->first();
        return view('editarUsuario', compact('usuario'));
    }

    public function salvarEdicao(Request $request) {
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        return redirect (route ('carregarLista'));
    }

    public function excluirUser($id){
        $usuario = Usuario::where('id', $id)->first();
        $usuario->destroy($id);
        return redirect (route ('carregarLista'));
    }

    public function cadastrarEndereco() {
        return view('cadastrarEndereco');
    }

    public function formEnd(Request $request){
        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->complemento = $request->complemento;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();

        return view('enderecoCompleto', compact('endereco'));
    }

    public function mostrarEndereco() {
        return view('enderecoCompleto');
    }

    public function listaEnd() {
        $enderecos = Endereco::all();
        return view('listaEnd', compact('enderecos'));
    }

    public function editarEnd($id) {
        $endereco = Endereco::where('id', $id)->first();
        return view('editarEndereco', compact('endereco'));
    }

    public function salvarEnd(Request $request) {
        $endereco = Endereco::where('id', $request->id)->first();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->update();
        return redirect (route ('carregarEnd'));
    }

    public function excluirEnd($id){
        $endereco = Endereco::where('id', $id)->first();
        $endereco->destroy($id);
        return redirect (route ('carregarEnd'));
    }

}
