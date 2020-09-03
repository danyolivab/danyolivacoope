@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-primary text-center">Nuevo Cliente para Gestión</h3>

                <small >Una vez finalizada la creación regrese a la vista anterior para continuar con la gestión</small>

                <form action="{{ route('asociado.store') }}" method="post" autocomplete="off" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="mt-2"><b>Nombre:</b></label>
                        <input
                            type="text"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            placeholder="Nombre"
                            class="form-control @error('nombre') is-invalid @enderror">
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="mt-2"><b>Dirección:</b></label>
                        <input
                            type="text"
                            name="direccion"
                            value="{{ old('direccion') }}"
                            placeholder="Direccion"
                            class="form-control @error('direccion') is-invalid @enderror">
                        @error('direccion')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="mt-2"><b>Teléfono:</b></label>
                        <input
                            type="text"
                            name="telefono"
                            value="{{ old('telefono') }}"
                            placeholder="Teléfono"
                            class="form-control @error('telefono') is-invalid @enderror">
                        @error('telefono')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="mt-2"><b>DPI:</b></label>
                        <input
                            type="text"
                            name="dpi"
                            value="{{ old('dpi') }}"
                            placeholder="DPI"
                            class="form-control @error('dpi') is-invalid @enderror">
                        @error('dpi')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Crear Cliente</button>
                    <a href="" class="btn btn-danger">Cancelar</a>

                </form>
            </div>
        </div>
    </div>
@endsection
