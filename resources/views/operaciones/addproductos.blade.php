@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <h1>Añadir los productos de interes</h1>

                <form action="{{ route('operaciones.storeproductos') }}" method="post" autocomplete="off" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Productos</label>
                        <select name="producto" class="form-control @error('producto') is-invalid @enderror">>
                            @foreach ($productos as $producto)
                                    <option value="{{$producto->id}}">
                                        {{$producto->tipo}} - {{$producto->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a href={{ route('operaciones.index') }} class="btn btn-danger">Finalizar</a>
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
