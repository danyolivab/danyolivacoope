@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-left text-primary">Detalle de la Operación</h3>

                <table class="table">

                    <tbody>
                        <tr>
                            <td><b>Orden de Operación</b></td>
                            <td>{{$operacion->id}}</td>
                        </tr>
                        <tr>
                            <td><b>Asociado</b></td>
                            <td>{{$operacion->asociado->nombre}}</td>
                        </tr>
                        <tr>
                            <td><b>Fecha Contacto</b></td>
                            <td>{{$operacion->fecha_contacto}}</td>
                        </tr>
                        <tr>
                            <td><b>Fecha Potencial</b></td>
                            <td>{{$operacion->fecha_potencial}}</td>
                        </tr>
                        <tr>
                            <td><b>Acuerdo</b></td>
                            <td>{{$operacion->acuerdo}}</td>
                        </tr>


                    </tbody>
                </table>

                <h3 class="text-primary">Productos de Interes</h3>
                <table>
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
                <a href={{ route('operaciones.index') }} class="btn btn-danger mt-5">Regresar</a>


            </div>
        </div>
    </div>
@endsection
