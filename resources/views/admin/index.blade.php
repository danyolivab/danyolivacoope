@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-primary text-center">Vista de Administrador</h3>
                <br>
                <a href="{{ route('admin.listproductos') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-plus"></i>
                    Mantenimiento Productos
                </a>

                <a class="btn btn-outline-success btn-lg">
                    <i class="fas fa-users"></i>
                    Mantenimiento usuarios
                </a>
            </div>
        </div>
    </div>
@endsection
