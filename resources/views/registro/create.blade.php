@extends('layouts.app')

@section('content')
    <div class="container">
    <form action="/registrar" method="POST">
            @csrf
        {{-- <form action="{{route('registrar.store')}}" method="POST">
        @{{ csrf_field() }} --}}
    <div class="mb-3">
      <label for="" class="form-label">Tipo</label>
      <input type="text" name="tipo" class="form-control" id="tipo" aria-describedby="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">documentacion</label>
      <input type="text" name="numerodocumento" class="form-control" id="numerodocumento">
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>
    <!-- {{-- <input type="submit" value="enviar" name"btn-enviar"> --}} -->
    </form>

    <a href="/registrar"><button type="submit" class="mt-4 btn btn-primary" >volver</button>
</a>

</div>
@endsection
