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


                @php
                    //$oper = $ope->productos;
                @endphp
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="text-center">Productos Agregado</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($ope->productos as $op)
                            <tr>
                                <td>{{$op}}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
