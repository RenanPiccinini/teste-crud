<?php

namespace App\Services;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroService
{
    public function create(Request $request)
    {
        $cadastro = new Cadastro;
        $cadastro->nome = $request->nome;
        $cadastro->telefone = $request->telefone;
        $cadastro->email = $request->email;
        $cadastro->save();

        return $cadastro;
    }

    public function list()
    {
        $cadastros = Cadastro::all();

        return $cadastros;
    }
}
