@extends('layout.layout')

@section('content')

<div class="text-center mt-5">

    @if(session('message'))
        <div class="alert alert-success col-md-12" id="alert" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <h2>Bem-vindo(a) ao Sistema de cadastro</h2>
    <img src="{{ asset('assets/img/foto-home.png') }}" alt="foto-home" width="500px" style="margin-left: 150px">
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
