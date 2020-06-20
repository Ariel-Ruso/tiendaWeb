@extends('layouts.app')
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
<div class= "container">
<div class="row">
            <div class="col-3">
                <div class="card">
                    <img  title= {{ $item->Nombre }}
                    alt= "Titulo"
                    class="card-img-top" 
                    src= {{$item->Imagen}}
                    data-toggle= "popover"
                    data-trigger= "hover"
                    data-content= {{$item->Descripcion}}
                    > 
                    <div class="card-body">
                        <span> {{ $item->Nombre }} </span>   
                            <h5 class="card-title">Precio: $ {{ $item->Precio }}</h5>
                            <p class="card-text">Descripcion</p>
                    </div>
                </div>
            </div>
</div>

</div>
@endsection