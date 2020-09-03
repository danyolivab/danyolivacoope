@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3 class="text-primary mb-4">Nuevo Gestión</h3>

                <a href="{{ route('asociado.create') }}" class="btn btn-primary align-left mb-2">
                    <i class="fas fa-plus mr-2"></i>Nuevo Cliente
                </a>

                <br>
                <small>Si no existe el asociado cree uno nuevo y luego realice la gestión</small><hr>
                <form action="{{ route('operaciones.store') }}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Asociado</label>
                        <select name="asociado" class="form-control @error('asociado') is-invalid @enderror">>
                            @foreach ($asociados as $asociado)
                                    <option value="{{$asociado->id}}">
                                    {{$asociado->nombre}}
                                </option>
                            @endforeach
                        </select>

                        @error('asociado')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre">Fecha de Contacto</label>
                        <input
                            type="date"
                            name="fecha_contacto"
                            value="{{ old('fecha_contacto') }}"
                            class="form-control @error('fecha_contacto') is-invalid @enderror">
                        @error('fecha_contacto')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombre">Fecha Potencial</label>
                        <input
                            type="date"
                            name="fecha_potencial"
                            value="{{ old('fecha_potencial') }}"
                            class="form-control @error('fecha_potencial') is-invalid @enderror">
                        @error('fecha_potencial')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="acuerdo">Acuerdo</label>
                        <input
                            type="text"
                            name="acuerdo"
                            value="{{ old('acuerdo') }}"
                            placeholder="Acuerdo"
                            class="form-control @error('acuerdo') is-invalid @enderror">
                        @error('acuerdo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Confirmar Gestión</button>
                        <a href={{ route('operaciones.index') }} class="btn btn-danger">Regresar</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
