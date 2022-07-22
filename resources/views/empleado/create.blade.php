@extends('layouts.app')

@section('content')

    <div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" >
        </div>

        <div class="mb-3">
            <label for="" class="from-label">Documento</label>
            <input type="text" name="documentidentidad" id="documentoidentidad" class="form-control">
        </div>

        <div class="mb-4">
            <label for="" class="form-label">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>


    </form>
</div>

@endsection
