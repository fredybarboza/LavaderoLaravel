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
    public function index()
  {
    $pedidos = Pedido::where('estado','0')->get();
    
    return response([
     'pedidos'=>PedidoResource::collection($pedidos),
     'message'=>'Retrieved Succesfully'],
     200);
   
  }
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
  //UPDATE
  public function update(Request $request, Pedido $pedido)
  {
    $input = $request->all();
    $validator = Validator::make($input, [
    'id_empleado_encargado' => 'required'
    ]);
      if($validator->fails()){
      return response(['error'=>$validator->errors(),'Validation Error']);  
      }
    $pedido->id_empleado_encargado = $input['id_empleado_encargado'];
    $pedido->save();
    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Updated Succesfully'],200);
  }
  //SHOW
  public function show($id)
  {
    $pedido = Pedido::find($id);
    if (is_null($pedido)) {
    return response(['Pedido not found']);  
    }

    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Retrieved Succesfully'],200);
  }
  //DESTROY
  public function destroy(Pedido $pedido)
  {
    $pedido->delete();
    return response(['pedidos'=> new PedidoResource($pedido), 'message'=>'Delete Succesfully'],200);
  }
}
