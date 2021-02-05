<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\User;
use App\Http\Resources\PedidoResource;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
     //SHOW
     public function show($id)
     {
       $pedidos = Pedido::where('id', $id)->where('estado','3')->get();
       foreach($pedidos as $p){
           $user = User::find($p->id_usuario);
           $p->id_usuario = $user->name;
       }
       return response([
        'pedidos'=>PedidoResource::collection($pedidos),
        'message'=>'Retrieved Succesfully'],
        200);
     }
}
