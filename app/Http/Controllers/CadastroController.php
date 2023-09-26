<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Services\CadastroService;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    protected $CadastroService;

    public function __construct(CadastroService $CadastroService)
    {
        $this->CadastroService = $CadastroService;
    }

    public function index()
    {
        return view('cadastro.index');
    }

    public function create()
    {
        return view('cadastro.criar-cadastro');
    }

    public function store(CadastroRequest $request)
    {
        $this->CadastroService->create($request);

        return redirect()->route('lista-cadastros')->with('message', 'Cadastro efetuado com sucesso');
    }

    public function list()
    {
        $cadastros = $this->CadastroService->list();

        return view('cadastro.cadastros', [
            'cadastros' => $cadastros,
        ]);
    }

    public function edit($id)
    {
        $cadastro = $this->CadastroService->edit($id);

        return view('cadastro.editar-cadastro', [
            'cadastro' => $cadastro
        ]);
    }

    public function update(CadastroRequest $request, $id)
    {
        $this->CadastroService->update($request, $id);

        return redirect()->route('lista-cadastros')->with('message', 'Cadastro editado com sucesso');
    }

    public function delete($id)
    {
        $this->CadastroService->delete($id);

        return redirect()->route('lista-cadastros')->with('message', 'Cadastro excluido com sucesso');
    }

}
