<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Pedido;
use App\Http\Resources\PedidoResource;
use App\Http\Resources\EmpleadoResource;
use Validator;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::all();
    
        return response([
         'empleados'=>EmpleadoResource::collection($empleado),
         'message'=>'Retrieved Succesfully'],
         200);
    }

     //STORE
   public function store(Request $request){
    $input = $request->all();
    $validator = Validator::make($input, [
    'nombre' => 'required',
    'apellido' => 'required',
    'ci' => 'required',
    ]);
      if($validator->fails()){
      return response(['error'=>$validator->errors(),'Validation Error']);    
      }
    $empleado = Empleado::create($input);
    return response(['pedidos'=> new EmpleadoResource($empleado), 'message'=>'Created Succesfully'],200);
  }
  //SHOW
  public function show($id)
  {
    $empleados = Pedido::where('id_empleado_encargado',$id)->get();
    if (is_null($empleados)) {
    return response(['Employe not found']);  
    }
    return response([
        'pedidos'=>EmpleadoResource::collection($empleados),
        'message'=>'Retrieved Succesfully'],
        200);

    
  }
}
