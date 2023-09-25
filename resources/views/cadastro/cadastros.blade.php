@extends('layout.layout')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <h1>Lista cadastros</h1>

                        @if(session('message'))
                            <div class="alert alert-success col-md-12" id="alert" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="col-md-12">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cadastros as $cadastro)
                                        <tr>
                                            <td>{{ $cadastro->nome }}</td>
                                            <td>{{ $cadastro->email }}</td>
                                            <td>{{ $cadastro->telefone }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a class="btn btn-warning" href="{{ route('editar-cadastro', $cadastro->id)}}">Editar</a>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $cadastro->id }}">
                                                    Deletar
                                                </button>
                                            </td>
                                          </tr>

                                        <!-- Modal de confirmação -->
                                        <div class="modal fade" id="confirmDeleteModal{{ $cadastro->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmação de Exclusão</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Você tem certeza que deseja deletar o cadastro?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('deletar-cadastro', $cadastro->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </tr>


                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.remove();
        }
    }, 3000);
</script>
