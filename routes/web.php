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

Route::get('/operaciones', 'OperacionController@index')->name('operaciones.index');
Route::get('/operaciones/create', 'OperacionController@create')->name('operaciones.create');
Route::post('/operaciones/store', 'OperacionController@store')->name('operaciones.store');
Route::get('/operaciones/addproductos', 'OperacionController@addproductosform')->name('operaciones.addproductosform');
Route::post('/operaciones/addproductos/store', 'OperacionController@storeproductos')->name('operaciones.storeproductos');

Route::get('/operaciones/{operacion}', 'OperacionController@show')->name('operaciones.show');
Route::delete('/operaciones/{operacion}', 'OperacionController@destroy')->name('operaciones.destroy');

//-------------------------------------------------------------------------------------------------------------
// SUPERVISORES
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor.index');
Route::get('/supervisor/{user}', 'SupervisorController@show')->name('supervisor.show');
Route::get('/supervisor/operacion/{operacion}', 'SupervisorController@showdetail')->name('supervisor.showdetail');

//-------------------------------------------------------------------------------------------------------------
// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/create', 'AdminController@create')->name('admin.create');
Route::post('/admin/store', 'AdminController@create')->name('admin.store');

