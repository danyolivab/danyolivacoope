@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-primary text-center">Editar Producto</h3>
                <form action="{{ route('admin.updateproducto', ['producto' => $producto->id]) }}" method="post" autocomplete="off" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="codigo">Código Producto</label>
                        <input
                            type="text"
                            name="codigo"
                            value="{{ $producto->codigo }}"
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
                            value="{{ $producto->nombre }}"
                            placeholder="Código"
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
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href={{ route('admin.listproductos') }} class="btn btn-danger">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
