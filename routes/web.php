<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/pedidos', 'App\Http\Controllers\PedidoController@index')->name('pedidos.index')
                                                        ->middleware('permission:pedidos.index');
    //Route::get('/pedidos/{role}', 'App\Http\Controllers\PedidoController@destroy')->name('pedidos.destroy')
                                                        //->middleware('permission:pedidos.destroy');
    Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index')->name('empleados.index')
                                                        ->middleware('permission:empleados.index');
    Route::get('/nuevo-empleado', 'App\Http\Controllers\EmpleadoController@createView')->name('empleados.store')
                                                        ->middleware('permission:empleados.store');
    Route::post('/nuevo-empleado', 'App\Http\Controllers\EmpleadoController@createEmployee')->name('empleados.store')
                                                        ->middleware('permission:empleados.store');
     Route::get('/usuarios', 'App\Http\Controllers\UserController@index')->name('users.index')
                                                        ->middleware('permission:users.index');
    Route::get('/role/{id}', 'App\Http\Controllers\RoleController@view')->name('role.view')
                                                        ->middleware('permission:role.view');
    Route::post('/role', 'App\Http\Controllers\RoleController@create')->name('role.create')
                                                        ->middleware('permission:role.create');
    Route::get('/asignar/{pedidoId}', 'App\Http\Controllers\PedidoController@assignView')->name('pedidos.asignar')
                                                        ->middleware('permission:pedidos.asignar');
    Route::post('/asignar', 'App\Http\Controllers\PedidoController@assignEmployee')->name('pedidos.asignar')
                                                        ->middleware('permission:pedidos.asignar');
    
});
