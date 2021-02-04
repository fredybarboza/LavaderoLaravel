<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Pedido;
use App\Http\Resources\PedidoResource;
use Validator;

use Illuminate\Http\Request;

class PedidosFinalizadosController extends Controller
{
    //SHOW
    public function show($id)
  {
    $pedidos = Pedido::where('id_usuario', $id)->where('estado','3')->get();
    return response([
     'pedidos'=>PedidoResource::collection($pedidos),
     'message'=>'Retrieved Succesfully'],
     200);
  }
}
