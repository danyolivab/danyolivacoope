@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>EXPLICACIÓN DE IMPORTANCIA</h2>
                <p>El registro de nuevos usuarios debería de estar en esta pantalla, decidí dejarlo fuera de estar vista porque era necesario probar y evaluar la aplicación y para ello se requerirá crear usuarios, para facilitar esa tarea y no llenar los usuarios desde la base de datos y así también vea el funcionamiento del registro de usuarios lo hice de esta forma, pero en la vida real el registro deberia de estar acá para que solo un administrador pueda crear a nuevos usuarios</p>
                <a href={{ route('admin.index') }} class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </div>
@endsection
