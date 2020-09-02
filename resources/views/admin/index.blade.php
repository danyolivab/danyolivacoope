@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-primary text-center">Vista de Administrador</h3>
                <a href="{{ route('admin.create') }}" class="btn btn-outline-primary">Productos</a>
                <a class="btn btn-outline-success">Registro de usuarios</a>
            </div>
        </div>
    </div>
@endsection
