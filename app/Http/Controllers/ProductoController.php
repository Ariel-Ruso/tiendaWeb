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
    
    //muestra todos productos disponibles en base, paginados
    public function productos()
    {
        $productos= Producto::paginate(8);
        return view ('Productos', compact('productos'));
    }
    
    //muestra en detalle solo el producto elegido
    public function detalle($id)
    {
        $item= Producto::Findorfail($id);
        return view ('detalle', compact('item'));
    }

}
