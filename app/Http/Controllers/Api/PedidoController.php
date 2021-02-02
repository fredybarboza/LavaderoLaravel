<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Vehiculo;
use App\Http\Resources\PedidoResource;
use Validator;

class PedidoController extends Controller
{
    //STORE
   public function store(Request $request){
    $vehiculo = Vehiculo::find($request->id_vehiculo);
    $categoria=$vehiculo->id_categoria;
    $c = $request->id_categoria;
    if($categoria==$c){
    $input = $request->all();
    $validator = Validator::make($input, [
    'id_usuario' => 'required',
    'id_vehiculo' => 'required',
    'id_servicio' => 'required',
    'monto' => 'required',
    ]);
      if($validator->fails()){
      return response(['error'=>$validator->errors(),'Validation Error']);    
      }
    $pedido = Pedido::create($input);
    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Created Succesfully'],200);
    }
    else{
      return response(['message'=>'Error creating order']);
    }
  }
  
  //SHOW
  public function show($id)
  {
    $pedidos = Pedido::where('id_usuario', $id)->where('estado','1')->get();
    return response([
     'pedidos'=>PedidoResource::collection($pedidos),
     'message'=>'Retrieved Succesfully'],
     200);
  }

  //DESTROY
  public function destroy(Pedido $pedido)
  {
    $pedido->delete();
    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Delete Succesfully'],200);
  }
}
