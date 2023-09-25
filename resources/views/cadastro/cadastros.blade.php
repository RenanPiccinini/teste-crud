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
                                            {{--
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <form action="{{ route('excluir-funcionario', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este funcionário?')">Excluir</button>
                                                    </form>
                                                </div>
                                            </td> --}}
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
