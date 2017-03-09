<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/servicios', 'ServiciosController@index');

//Route::get('/task',['middleware' => 'auth', 'uses' => 'UserController@index']);
//Route::get('/admin',['middleware' => 'auth', 'uses' => 'AdminController@index']);

Route::get('restaurante', 'RestauranteController@index');
Route::get('restaurante/carta', 'CartaController@index');
Route::get('restaurante/reserva', 'ReservaController@index');
Route::post('restaurante/reserva', 'ReservaController@create');
Route::get('restaurante/contacto', 'ContactoController@index');

Route::get('gimactivity','gimactivityController@index');
Route::post('gimactivity','gimactivityController@create');
Route::get('conferencias','conferenciaController@index');
Route::post('conferencias','conferenciaController@create');
Route::get('wakeup','wakeupController@index');
Route::post('wakeup','wakeupController@create');
Route::get('masaje','MasajeController@index');
Route::post('masaje','MasajeController@create');

Route::get('limpieza','limpiezaController@index');
Route::post('limpieza','limpiezaController@create');
Route::get('actividad','actividadesController@index');

Route::get('spa','SpaController@index');
Route::post('spa','SpaController@create');

//Admin

Route::get('admin', 'adminController@index');

//Admin - Servicios
Route::get('adminservicios', 'AdminserviciosController@index');
Route::post('adminservicios', 'AdminserviciosController@destroy');


//Admin - Actividades
Route::get('adminactividades', 'AdminactividadesController@index');
Route::post('adminactividades', 'AdminactividadesController@destroy');



//Admin - Clientes
Route::get('AdminAddClient', 'AdminAddClientController@index');
Route::post('AdminAddClient', 'AdminAddClientController@create');

Route::get('AdminDeleteClient', 'AdminDeleteClientController@index');
Route::post('AdminDeleteClient', 'AdminDeleteClientController@destroy');

Route::get('AdminUpdateClient', 'AdminUpdateClientController@index');
Route::post('AdminUpdateClient', 'AdminUpdateClientController@update');

//PDF
Route::get('pdfActividades', 'pdfActividadesController@index');
Route::get('pdfServicios', 'pdfServiciosController@index');