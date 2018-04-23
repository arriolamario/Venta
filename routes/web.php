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

Route::resource('Usuario', 'UsuarioController');
Route::resource('OrdenTrabajo', 'OrdenTrabajoController');
Route::post('DetalleItem/AddItem','OrdenTrabajoController@AddItem');


Route::get('/', function () {
    return view('layouts.principal');
});