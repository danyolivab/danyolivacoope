@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center text-primary">Nuevas Operaciones</h3>

                @if (session('status'))
                    <operacion-exitosa></operacion-exitosa>
                @endif

                <a href="{{ route('operaciones.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Nuevo</a>
                <br>
                <table class="table mt-2 table-hover text-center">
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Fecha Contacto</th>
                            <th>Acuerdo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operaciones as $operacion)
                            <tr>
                                <td>{{$operacion->id}}</td>
                                <td>{{$operacion->asociado->nombre}}</td>
                                <td>{{$operacion->asociado->direccion}}</td>
                                <td>{{$operacion->fecha_contacto}}</td>
                                <td>{{$operacion->acuerdo}}</td>
                                <td>
                                    <a href="{{ route('operaciones.show' , ['operacion' => $operacion->id]) }}"
                                         class="btn btn-primary btn-sm">
                                         <i class="fas fa-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
