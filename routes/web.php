<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//--------------------------------------------------------------------------------------------------------------
// OPERADORES
Route::get('/operaciones', 'OperacionController@index')->name('operaciones.index')->middleware('revisaroperador');
Route::get('/operaciones/create', 'OperacionController@create')->name('operaciones.create')->middleware('revisaroperador');
Route::post('/operaciones/store', 'OperacionController@store')->name('operaciones.store')->middleware('revisaroperador');
Route::get('/operaciones/addproductos', 'OperacionController@addproductosform')->name('operaciones.addproductosform')->middleware('revisaroperador');
Route::post('/operaciones/addproductos/store', 'OperacionController@storeproductos')->name('operaciones.storeproductos')->middleware('revisaroperador');

Route::get('/operaciones/{operacion}', 'OperacionController@show')->name('operaciones.show');
Route::delete('/operaciones/{operacion}', 'OperacionController@destroy')->name('operaciones.destroy');

//-------------------------------------------------------------------------------------------------------------
// SUPERVISORES
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor.index')->middleware('revisarsuper');
Route::get('/supervisor/{user}', 'SupervisorController@show')->name('supervisor.show')->middleware('revisarsuper');
Route::get('/supervisor/operacion/{operacion}', 'SupervisorController@showdetail')->name('supervisor.showdetail')->middleware('revisarsuper');

//-------------------------------------------------------------------------------------------------------------
// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('revisaradmin');
Route::get('/admin/create', 'AdminController@create')->name('admin.create')->middleware('revisaradmin');
Route::post('/admin/store', 'ProductoController@store')->name('admin.store')->middleware('revisaradmin');

//-------------------------------------------------------------------------------------------------------------
// Rutas para mantenimientos para clientes y productos
Route::get('/asociados/createcliente', 'AsociadoController@create')->name('asociado.create');
Route::post('/asociados/store', 'AsociadoController@store')->name('asociado.store');

Route::get('/admin/productos', 'ProductoController@index')->name('admin.listproductos');
Route::get('/admin/{producto}/edit', 'ProductoController@edit')->name('admin.editproducto');
Route::put('/admin/{producto}', 'ProductoController@update')->name('admin.updateproducto');
Route::get('/admin/newusers', 'AdminController@newusers')->name('admin.newusers');



