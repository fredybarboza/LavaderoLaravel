<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Http\Resources\VehiculoResource;
use Validator;


class VehiculoController extends Controller
{
    //STORE
    public function store(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
        'id_usuario' => 'required',
        'id_categoria' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'matricula' => 'required',
        'color' => 'required',
        ]);
          if($validator->fails()){
          return response(['error'=>$validator->errors(),'Validation Error']);    
          }
        $vehiculo = Vehiculo::create($input);
        return response(['vehiculo'=> new VehiculoResource($vehiculo), 'message'=>'Created Succesfully'],200);
      }

      //SHOW
      public function show($id)
  {
    $vehiculos = Vehiculo::where('id_usuario',$id)->get();
    
    return response([
     'vehiculos'=>VehiculoResource::collection($vehiculos),
     'message'=>'Retrieved Succesfully'],
     200);
  }

  //DESTROY
  public function destroy(Vehiculo $vehiculo)
  {
    $vehiculo->delete();
    return response(['vehiculo'=> new VehiculoResource($vehiculo), 'message'=>'Delete Succesfully'],200);
  }
}
