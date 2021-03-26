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
}
