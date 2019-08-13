<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/service', 'servicesController@listado')->name('service.listado');


Route::get('/crearService', function(){
  return view('crearService');
});

Route::post('/crearService', 'servicesController@crear');

Route::get('/terminosCondiciones', 'terminosCondicionesController@vista');
Route::get('/politicas', 'politicasController@vista');
Route::get('/contacto', function(){
  return view('contacto');
});

Route::post('/contacto', 'contactoController@crear');



Route::get('/listaProducto', 'ProductsController@listado');

Route::get('/crearProducto', function(){
  return view('crearProducto');
});

Route::post('/crearProducto', 'ProductsController@crear');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detalleProducto/{id}', 'ProductsController@detalle')->name('detalleProducto');

Route::get('/carrito/{user_id}/{product_id}', 'carritoController@store');

Route::get('/carrito/{user_id}', 'carritoController@show');

Route::get('/borrarCarrito/{user_id}/{product_id}', 'carritoController@destroy');
// https://www.youtube.com/watch?v=_axDvAFgiI8
