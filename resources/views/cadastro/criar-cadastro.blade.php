@extends('layout.layout')

@section('content')

    <h1>Criar cadastro</h1>

    @if($errors->any())
        <div class="alert alert-danger rounded-3" id="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-3" action="{{ route('criar-cadastro-post') }}" method="POST">
        @csrf
        <div class="col-md-12">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="{{ old('nome') }}">
        </div>
        <div class="col-md-6 mt-2">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
        </div>
        <div class="col-6 mt-2">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone com DDD" name="telefone" value="{{ old('telefone') }}">
        </div>

        <button class="btn btn-success mt-4 ml-3">Cadastrar</button>
    </form>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

<script>
    setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.remove();
        }
    }, 3000);
</script>

{{-- Não permitir letras no phone --}}
<script>
    $(document).ready(function() {
      $('#telefone').on('keypress', function(event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        var phoneNumber = $(this).val();

        if (charCode != 8 && charCode != 0 && (charCode < 48 || charCode > 57)) {
          event.preventDefault();
          return false;
        }

        if (phoneNumber.length == 0) {
          $(this).val('(');
        } else if (phoneNumber.length == 3) {
          $(this).val(phoneNumber + ') ');
        } else if (phoneNumber.length == 10) {
          $(this).val(phoneNumber + '-');
        }
      });
    });
</script>

{{-- Limita phone a 15 caracteres --}}
<script>
    $(document).ready(function() {
        $('#telefone').attr('maxlength', '15');
    });
</script>
