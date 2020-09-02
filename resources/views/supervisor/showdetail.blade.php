@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-primary">Detalle de Productos de la Gestión</h3>
                <table class="table table-hover">
                <tbody>
                    @foreach ($operacion->productos as $producto)

                        <tr>
                            <td>
                                COD: {{$producto->id}} - {{$producto->nombre}} - {{ $producto->tipo}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Si no se muestra ningún detalle es porque ni hay ningun producto</p>
            <a href={{ route('supervisor.index') }} class="btn btn-danger mt-5">Regresar</a>

            </div>
        </div>
    </div>
@endsection
