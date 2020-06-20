@extends('layouts.app')
@section('title', 'Carrito Compras')
@section('content')

<br/>
<br>
    <div class="alert alert-success">
        <a href="{{ route('verCarrito') }}" class="badge badge-success"> Ver carrito </a>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header" align= "center">
                        <h2>Producto detallado </h2>
                    </div>                                 
                    <div class="card">
                        <img  title= {{$item->Nombre}}
                        alt= "Titulo"
                        class="card-img-top" 
                        src= {{$item->Imagen}}>
                                                                                
                        <div class="card-body">
                            <h3> {{$item->Nombre}} </h3>   
                            <h5 class="card-title">Precio: $ {{$item->Precio}}</h5>

                            <p class="card-text">Descripcion: </p>
                                {{$item->Descripcion}}
                                <br><br>
                                <a href="{{ url('productos') }}"
                                    class="btn btn-outline-primary" 
                                    type= "button" 
                                    value= "Volver" 
                                    name= "btnAccion">
                                    Volver
                                </a>                    
                            </div>         
                        </div>    
                    </div>    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection