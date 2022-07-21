@extends('layouts.app')

@section('content')
    <div class="container">
    <form action="/registrar/{{$registro->id}}" method="post">
        @csrf
        @method ('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Tipo</label>
      <input type="text" name="tipo" class="form-control" id="tipo" aria-describedby="" value="{{$registro->tipo}}">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">documentacion</label>
      <input type="text" name="numerodocumento" class="form-control"
      id="numerodocumento" value="{{$registro->numerodocumento}}">
    </div>

    <button type="submit" class="btn btn-primary">enviar</button>

    </form>
    <a href="/registrar"><button class="btn btn-primary">Volver</button></a>
</div>
@endsection
