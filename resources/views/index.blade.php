@extends('layouts.app')
@section('title', 'Carrito Compras')
@section('content')

    <nav class="nav">
        
        <li class="nav-item">
            <a class="nav-link active" href="Index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" 
            aria-disabled="true">Carrito (0)</a>
        </li>
        
    </nav>
    <br/>
    
<div class="container">
    <br>
        <div class="alert alert-success">
            Mensajes...
          
            <a href="#" class="badge badge-success"> Ver carrito </a>

        </div>

        
        <div class="row">
        @foreach($productos as $item)
            <div class="col-3">
                <div class="card">
                    <img  title= {{$item->Nombre}}
                    alt= "Titulo"
                    class="card-img-top" 
                    src= {{$item->Imagen}}
                    data-toggle= "popover"
                    data-trigger= "hover"
                    data-content= {{$item->Descripcion}}
                    > 
                    <div class="card-body">
                        <span> {{$item->Nombre}} </span>   
                            <h5 class="card-title">Precio: $ {{$item->Precio}}</h5>
                            <p class="card-text">Descripcion</p>

                            <form action="{{route ('vercarrito')}}" method= "post">
                                @csrf
                                <input type="text" name="id" id="id" value= {{$item->id}} >
                                <input type="text" name="Nombre" id="Nombre" value= {{$item->Nombre}}>
                                <input type="text" name="Precio" id="Precio" value=  {{$item->Precio}}>
                                <input type="text" name="Cantidad" id="Cantidad" value= 1 >

                                <button class="btn btn-primary" 
                                    type= "submit" 
                                    value= "Agregar" 
                                    name= "btnAccion">
                                    Agregar al Carrito
                                </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
              
</div>
<script>
    $(function() {
        $('[data-toggle= "popover"]').popover()
    });

</script>


@endsection