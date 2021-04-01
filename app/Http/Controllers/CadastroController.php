<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

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


}
