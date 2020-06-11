<?php

namespace App\Http\Controllers;

use App\Carrito;
use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
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
    public function agregar($id)
    {
        $producto= Producto::Findorfail($id);
        $carrito= session()->get('carrito');
        
        //si carro vacio, es 1 producto
        if(!$carrito){
            $carrito= [
                $id => [
                    "Nombre" => $producto->Nombre,
                    "Cantidad" => 1,
                    "Precio" => $producto->Precio,
                    "Imagen" => $producto->Imagen
                    ]
                ];
            session()->put ('carrito', $carrito);
            return redirect()->back()->with('mensaje', 'Producto agregado al carrito');
        }

        //si carrito ya tiene ese item agrego otro
        if(isset($carrito[$id])) {
            $carrito[$id]['Cantidad']++;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('mensaje', ' Producto mismo item agregado al carrito');
        }

        //si item no existe lo agrego
        $carrito[$id] = [
            "Nombre" => $producto->Nombre,
            "Cantidad" => 1,
            "Precio" => $producto->Precio,
            "Imagen" => $producto->Imagen
        ];
        
    session()->put ('carrito', $carrito);
    return redirect()->back()->with('mensaje', 'Producto agregado al carrito');

    }
    
    public function eliminar($id)
    {
        $producto= Producto::Findorfail($id);
        $carrito= session()->get('carrito');

        //si carrito ya tiene ese item booro uno
        if(isset($carrito[$id])) {
            $carrito[$id]['Cantidad']--;
            session()->put('carrito', $carrito);
            return redirect()->back()->with('mensaje', ' Producto eliminado del carrito');
}

        
    }

    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function verCarrito()
    {
        return view ('carrito');
    }

    public function edit(Carrito $carrito)
    {
        //
    }

    public function update(Request $request, Carrito $carrito)
    {
        //
    }

}
