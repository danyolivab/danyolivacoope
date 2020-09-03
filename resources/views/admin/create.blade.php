@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-primary text-center">Nuevos Productos</h3>
                <form action="{{ route('admin.store') }}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="codigo">Código Producto</label>
                        <input
                            type="text"
                            name="codigo"
                            value="{{ old('codigo') }}"
                            placeholder="Código"
                            class="form-control @error('codigo') is-invalid @enderror">
                        @error('codigo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre Producto</label>
                        <input
                            type="text"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            placeholder="Nombre del producto"
                            class="form-control @error('nombre') is-invalid @enderror">
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre">Tipo Producto</label>
                        <select name="tipo" class="form-control @error('tipo') is-invalid @enderror">>
                            <option value="Ahorros">Ahorros</option>
                            <option value="Prestamos">Préstamos</option>
                            <option value="Seguros">Seguros</option>
                        </select>

                        @error('tipo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Agregar Producto</button>
                        <a href={{ route('admin.listproductos') }} class="btn btn-danger">Regresar</a>
                    </div>
                </form>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Operación Exitosa!</strong> Se ha agreado el producto
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
