<!-- blade es la plantilla de laravel
blade es un motor de plantillas simple  -->

@extends('layouts.app')


@section('content')

    {{-- <h1>Lista</h1> --}}
    <div class="container-sm">

        <a href="/registrar/create">crear</a>

        <button type="button" class="btn btn-outline-primary" onclick="windows.location">
            guia
        </button>
        <table class="table table-dark table-responsive table-hover">
            <thead class="">
            <tr>
                <th scope="col">#</th>
                <th scope="col">documentacion</th>
                <th scope="col">tipo</th>
                <th scope="col">Acciones</th>
                <th></th>

            </tr>
            </thead>
            <tbody>@foreach ($registros as $registro)
            <tr>

                <td>{{$registro->id}}</td>
                <td>{{$registro->numerodocumento}}</td>
                <td>{{$registro->tipo}}</td>

                <td>
                    {{-- <button class="btn btn-warning" >editar</button> --}}
                    <a href="registrar/{{$registro->id}}/edit" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    {{-- <button class="btn btn-danger">eliminar</button> --}}
                    <form action="{{route('registrar.destroy',$registro->id)}}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>
                </td>

            </tr>@endforeach
        </tbody>
        </table>
    </div>

    @endsection
