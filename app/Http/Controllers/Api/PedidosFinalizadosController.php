<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Pedido;
use App\Http\Resources\PedidoResource;
use Validator;

use Illuminate\Http\Request;

class PedidosFinalizadosController extends Controller
{
    //INDEX
    public function index()
    {
      $pedidos = Pedido::where('estado','1')->get();
      
      return response([
       'pedidos'=>PedidoResource::collection($pedidos),
       'message'=>'Retrieved Succesfully'],
       200);
     
    }
    
    //UPDATE
    public function update(Request $request, $id){
      $pedido = Pedido::find($id);
      $pedido->estado = '1';
      $pedido->save();
      return response(['message'=>'Updated Succesfully'],200);
    }
    //SHOW
    public function show($id)
  {
    $pedido = Pedido::find($id);
    if (is_null($pedido)) {
    return response(['Pedido not found']);  
    }
    switch($pedido->id_servicio){
      case '1': $pedido->id_servicio='FULL'; break;
      case '2': $pedido->id_servicio='EXTERIOR+'; break;
      case '3': $pedido->id_servicio='EXTERIOR ECO'; break;
      case '4': $pedido->id_servicio='SEMI+'; break;
      case '5': $pedido->id_servicio='INTERIOR'; break;
    }

    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Retrieved Succesfully'],200);
  }
}
