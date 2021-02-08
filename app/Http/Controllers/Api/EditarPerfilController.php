<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\UserData;
use App\Http\Resources\UserResource;
use Validator;

use Illuminate\Http\Request;

class EditarPerfilController extends Controller
{
    public function show($id){
    $user = UserData::where('id_usuario', $id)->first();
    return response(['user'=> new UserResource($user), 'message'=>'Retrieved Succesfully'],200);
    }
    
    public function store(Request $request){
        $user = UserData::where('id_usuario', $request->id_usuario)->first();
        //VALIDACION
        $input = $request->all();
            $validator = Validator::make($input, [
            'id_usuario' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
            ]);
              if($validator->fails()){
              return response(['error'=>$validator->errors(),'Validation Error']);    
              }
       
        if($user==null){//NUEVO USER DATA
            
            $u = UserData::create($input);
            return response(['usuario'=> new UserResource($u), 'message'=>'Created Succesfully'],200);
            
        }
        else{//ACTUALIZAR USER DATA
            $user->nombre=$request->nombre;
            $user->apellido=$request->apellido;
            $user->ci=$request->ci;
            $user->direccion=$request->direccion;
            $user->celular=$request->celular;
            $user->save();
        }
        
    }
}
