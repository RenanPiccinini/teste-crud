@extends('layout.layout')

@section('content')

    <h1>Editar cadastro</h1>

    <form class="row g-3" action="{{ route('editar-cadastro-post', $cadastro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-12">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="{{ $cadastro->nome }}">
        </div>
        <div class="col-md-6 mt-2">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $cadastro->email }}">
        </div>
        <div class="col-6 mt-2">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cadastro->telefone }}">
        </div>

        <button class="btn btn-success mt-4 ml-3">Salvar</button>
    </form>


@endsection
