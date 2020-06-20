<?php

use Illuminate\Support\Facades\Route;
//inicio proyecto 25-5, finalizacion 8-6

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductoController@productos')->name('productos');

Route::get('/detalle/{id}', 'ProductoController@detalle')->name('detalle');

Route::get('verCarrito', 'CarritoController@verCarrito')->name('verCarrito');

Route::get('agregar/{id}', 'CarritoController@agregar')->name('agregar');

Route::get('eliminar/{id}', 'CarritoController@eliminar')->name('eliminar');

Route::get('verSession', 'CarritoController@verSession')->name('verSession');

Route::post('nuevaVenta/{detalle()}', 'VentaController@nuevaVenta')->name('nuevaVenta');




