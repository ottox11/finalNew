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

Route::get('/service', 'servicesController@listado');


Route::get('/crearService', function(){
  return view('crearService');
});

Route::post('/crearService', 'servicesController@crear');


Route::get('/listaProducto', 'ProductsController@listado');

Route::get('/crearProducto', function(){
  return view('crearProducto');
});

Route::post('/crearProducto', 'crearProductoController@crear');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
