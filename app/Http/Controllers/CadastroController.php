<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $this->CadastroService->create($request);

        return redirect()->route('index')->with('message', 'Cadastro efetuado com sucesso');
    }

    public function list()
    {
        $cadastros = $this->CadastroService->list();

        return view('cadastro.cadastros', [
            'cadastros' => $cadastros,
        ]);
    }
}
