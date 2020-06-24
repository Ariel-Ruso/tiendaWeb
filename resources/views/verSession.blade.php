@extends ('layouts.app')
@section('contents')      

<div class="alert alert-success">
          @if (session('mensaje'))
                  {{ mensaje }}   
          @endif
</div>
<?php $valor=0 ?>

                    <table class="table table-bordered">
                        <thead >
                            <tr>
                                <th>
                                    Producto
                                </th>
                                <th>
                                    Precio Unitario
                                </th>
                                <th>
                                    Cantidad
                                </th>
                                <th>
                                    Precio Total
                                </th>
                                <th>
                                    Imagen
                                </th>
                                <th>
                                    Accion
                                </th>
                            </tr>
                        </thead>
@foreach ($carrito as $detalle)

        <?php $valor += $detalle['Precio'] * $detalle['Cantidad'] ?>

        <tr>
        <th  class="font-weight-normal" >
                {{ $detalle->'Nombre' }}
        </th>
        <th  class="font-weight-normal" >
                $ {{ $detalle['Precio'] }}
        </th>
        <th  class="font-weight-normal" > 
                {{ $detalle['Cantidad'] }}
        </th>
        <th  class="font-weight-normal" >
                $ {{ $detalle['Precio'] * $detalle['Cantidad'] }}
        </th>
        <th>
                <img src= {{ $detalle['Imagen'] }} width="70" height="70"/>
        </th>
      
        </tr>
@endforeach

@endsection