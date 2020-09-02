<?php

namespace App\Http\Controllers;

use App\Asociado;
use App\Operacion;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OperacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operaciones = Auth::user()->operaciones;
        return view('operaciones.index')->with('operaciones', $operaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asociados = Asociado::all();
        return view('operaciones.create')->with('asociados', $asociados);
    }

    // FUnciones para agregar servicios al cliente
    public function addproductosform(){
        $operacion = Operacion::latest('id')->first();
        $productos = Producto::all();
        $ope = Operacion::find($operacion);

        return view('operaciones.addproductos')->with('productos', $productos)->with('operacion', $operacion)->with('ope', $ope);
    }

    public function storeproductos(Request $request){
        $operacion = Operacion::latest('id')->first();

        $data = $request->validate([
            'producto' => 'required',
        ]);

        DB::table('operacion_producto')->insert([
            'operacion_id' => $operacion->id,
            'producto_id' => $data['producto']
        ]);

        return redirect()->route('operaciones.addproductosform');
    }

    // FIN

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'asociado' => 'required',
            'fecha_contacto' => 'required',
            'fecha_potencial' => 'required',
            'acuerdo' => 'required'
        ]);

        $operacion = new Operacion();
        $operacion->asociado_id = $data['asociado'];
        $operacion->user_id = Auth::user()->id;
        $operacion->fecha_contacto = $data['fecha_contacto'];
        $operacion->fecha_potencial = $data['fecha_potencial'];
        $operacion->acuerdo = $data['acuerdo'];
        $operacion->save();

        $ultima = $operacion->id;
        //dd($ultima);
        //$status = 'Se ha agregado un nuevo asociado';
        return redirect()->route('operaciones.addproductosform');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function show(Operacion $operacion)
    {
        return view('operaciones.show')->with('operacion', $operacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Operacion $operacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operacion $operacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operacion $operacion)
    {
        $operacion->delete();
        return redirect()->action('OperacionController@index');
    }
}
