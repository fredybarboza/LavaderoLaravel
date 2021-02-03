<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;

use App\Http\Resources\PedidoResource;
use Validator;

class PedidosAprobadosController extends Controller
{
  //SHOW
  public function show($id)
  {
    $pedidos = Pedido::where('id_usuario', $id)->where('estado','2')->get();
    return response([
     'pedidos'=>PedidoResource::collection($pedidos),
     'message'=>'Retrieved Succesfully'],
     200);
  }
}
