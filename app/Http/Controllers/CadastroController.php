<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('listaUsuario');
    }

    public function form(Request $request){
        $nome = $request->nome;
        $data = $request->data;
        $senha = $request->senha;
        $matricula = $request->matricula;

        return view('cadastroCompleto', compact('nome', 'data', 'senha', 'matricula'));
    }
}
