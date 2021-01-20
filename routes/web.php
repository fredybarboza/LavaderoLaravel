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
    Route::get('/pedidos/{role}', 'App\Http\Controllers\PedidoController@destroy')->name('pedidos.destroy')
                                                        ->middleware('permission:pedidos.destroy');
    
});
