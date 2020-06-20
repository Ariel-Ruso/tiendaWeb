<?php
namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{      
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function productos()
    {
        $productos= Producto::paginate(6);
        return view ('Productos', compact('productos'));
    }

    public function detalle($id)
    {
        $item= Producto::Findorfail($id);
        return view ('detalle', compact('item'));
    }

}
