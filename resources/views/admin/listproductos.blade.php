@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center text-primary">Mantenimiento de Productos</h3>
                <a href="{{route('admin.create')}}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Producto
                </a>
                <hr>
                <table class="table table-hover mt-2 text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código Único</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id}}</td>
                                <td>{{ $producto->codigo}}</td>
                                <td>{{ $producto->tipo}}</td>
                                <td>{{ $producto->nombre}}</td>
                                <td>
                                <a href="{{route('admin.editproducto', ['producto' => $producto->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('admin.index')}}" class="btn btn-danger">Regresar</a>
            </div>
        </div>

    </div>
@endsection
