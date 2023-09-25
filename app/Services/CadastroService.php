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

    public function edit($id)
    {
        $cadastro = Cadastro::find($id);

        return $cadastro;
    }

    public function update($request, $id)
    {
        $cadastro = Cadastro::find($id);
        $cadastro->nome = $request->input('nome');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->email = $request->input('email');
        $cadastro->save();

        return $cadastro;
    }

    public function delete($id)
    {
        $cadastro = Cadastro::find($id);

        $cadastro->delete();
    }

}
