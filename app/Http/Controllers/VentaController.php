<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
       * $nota = new Nota();
       * $nota->nombre = $request->nombre;
       * $nota->descripcion = $request->descripcion;
       * $nota->user_id = auth()->id();
       * $nota->save();

    *return back()->with('mensaje', 'Nota Agregada!');
     */
    public function nuevaVenta(Request $request)
    {
        $venta= new Venta();
        $carrito= session()->get('carrito');

        @foreach ($carrito as $id => $detalleV)

            //$venta->Total= $request->session['Cantidad'];
            //$venta->Email= input( name="email");
            //$venta->save();
            return view('nuevaVenta');

        @endforeach
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function mostrarVenta(Venta $venta)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
