<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassportAuthController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\PedidosFinalizadosController;
use App\Http\Controllers\Api\VehiculoController;
use App\Http\Controllers\Api\FacturaController;
use App\Http\Controllers\Api\NotificacionController;
use App\Http\Controllers\Api\EditarPerfilController;
use App\Http\Controllers\Api\PedidosAprobadosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {
    Route::resource('pedidos', PedidoController::class);
    Route::resource('aprobados', PedidosAprobadosController::class);
    Route::resource('finalizados', PedidosFinalizadosController::class);
    Route::resource('vehiculos', VehiculoController::class);
    Route::resource('facturas', FacturaController::class);
    Route::resource('notificaciones', NotificacionController::class);
    Route::resource('perfil', EditarPerfilController::class);
});

