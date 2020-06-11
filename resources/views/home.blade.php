@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <h4> 
                        {{ Auth::user()->name }}
                    </h4>
                    <br>

                    <a href= "{{ route ('productos') }}" class="btn btn-primary" >
                        Ir a tienda 
                    </a>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection