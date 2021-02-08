<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\UserData;
use App\Http\Resources\PedidoResource;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
     //SHOW
     public function show($id)
     {
      $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.monto', 'user_data.nombre', 'user_data.apellido','user_data.direccion','user_data.ci')
      ->join('user_data', 'pedidos.id_usuario', '=', 'user_data.id_usuario')
      ->where('estado','3')->where('pedidos.id',$id)->get();
       return response([
        'pedidos'=>PedidoResource::collection($pedidos),
        'message'=>'Retrieved Succesfully'],
        200);
     }
}
