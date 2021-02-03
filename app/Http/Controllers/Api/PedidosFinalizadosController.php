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
    /*public function index()
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
    }*/

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
