@extends('layout.layout')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <h1>Lista cadastros</h1>

                        @if(session('message'))
                            <div class="alert alert-success col-md-3" id="alert" role="alert">
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
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cadastros as $cadastro)
                                        <tr>
                                            <td>{{ $cadastro->nome }}</td>
                                            <td>{{ $cadastro->email }}</td>
                                            <td>{{ $cadastro->telefone }}</td>
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
