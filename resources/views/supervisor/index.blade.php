@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-primary">Área de Supervisores</h3>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Operador</th>
                            <th>Ver Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operadores as $operador)
                            <tr>
                                <td>{{ $operador->name}}</td>
                                <td>
                                    <a href="{{ route('supervisor.show', ['user' => $operador->id]) }}" class="btn btn-primary">
                                        <i class="far fa-eye"></i>
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
