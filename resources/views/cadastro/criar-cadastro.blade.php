@extends('layout.layout')

@section('content')

    <h1>Criar cadastro</h1>

    <form class="row g-3" action="{{ route('criar-cadastro-post') }}" method="POST">
        @csrf
        <div class="col-md-12">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
        </div>
        <div class="col-md-6 mt-2">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
        </div>
        <div class="col-6 mt-2">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone com DDD" name="telefone">
        </div>

        <button class="btn btn-success mt-4 ml-3">Cadastrar</button>
    </form>


@endsection
