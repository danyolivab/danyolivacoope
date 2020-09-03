<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.listproductos')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'tipo' => 'required'
        ]);

        $producto = new Producto();
        $producto->codigo = $data['codigo'];
        $producto->nombre = $data['nombre'];
        $producto->tipo = $data['tipo'];
        $producto->save();

        $status = true;
        return redirect()->route('admin.create')->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('admin.editproducto')->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $data = $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'tipo' => 'required'
        ]);

        $producto->codigo = $data['codigo'];
        $producto->nombre = $data['nombre'];
        $producto->tipo = $data['tipo'];
        $producto->save();

        $status = 'Hola';
        return redirect()->route('admin.listproductos')->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
