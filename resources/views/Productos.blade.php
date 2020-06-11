@extends('layouts.app')
@section('title', 'Carrito Compras')
@section('cabecera')
@section('content')

<div class="alert alert-success">
          @if (session('mensaje'))
                {{ session( 'mensaje' ) }}        
          @endif
          <br>
          <a href="{{ route ('verCarrito') }}" class="badge badge-success"> Ver carrito </a>
 </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align= "center">
                    <h2>
                        Productos disponibles
                    </h2>
                </div>           

                <div class="row">
                @foreach($productos as $item)
                    <div class="col-3">
                        <div class="card">
                            <img  title= {{$item->Nombre}}
                            alt= "Titulo"
                            class="card-img-top" 
                            src= {{$item->Imagen}}
                            height= "217px"
                            > 
                            <div class="card-body">
                                <span> {{$item->Nombre}} </span>   
                                    <h5 class="card-title">Precio: $ {{$item->Precio}}</h5>
                                                                                                          
                            </div>
                            <a href=" {{ url('agregar/'.$item->id) }}" class="btn btn btn-primary" >Agregar</a>
                            <a href=" {{ url('detalle/'.$item->id) }}" class="btn btn btn-secondary" >Detalle </a>
                            <a href=" {{ url('eliminar/'.$item->id) }}" class="btn btn btn-danger" >Eliminar </a>
                </div>
            </div>
            @endforeach
        </div>
            </div>
        </div>
    </div>
</div>
@endsection