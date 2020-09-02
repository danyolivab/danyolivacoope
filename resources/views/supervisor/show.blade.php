@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3><span class="text-primary">Gestiones Realizadas por: </span>{{ $user->name }}</h3>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No. Gestión</th>
                            <th>Asociado</th>
                            <th>Fecha Contacto</th>
                            <th>Fecha Potencial</th>
                            <th>Acuerdo</th>
                            <th>Productos de Interes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operaciones as $operacion)
                            <tr>
                                <td>{{ $operacion->id}}</td>
                                <td>{{ $operacion->asociado->nombre}}</td>
                                <td>{{ $operacion->fecha_contacto}}</td>
                                <td>{{ $operacion->fecha_potencial}}</td>
                                <td>{{ $operacion->acuerdo}}</td>
                                <td>
                                <a href="{{ route('supervisor.showdetail', ['operacion' => $operacion->id]) }}" class="btn btn-primary btm-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href={{ route('supervisor.index') }} class="btn btn-danger mt-5">Regresar</a>
            </div>
        </div>
    </div>
@endsection
