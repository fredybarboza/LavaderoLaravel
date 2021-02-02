<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Validator;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::get()->all();
        return view('Empleados.empleados',compact('empleados'));
    }

    public function createView(){
        return view('Empleados.crear');
    }

    public function createEmployee(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
        'nombre' => 'required',
        'apellido' => 'required',
        'ci' => 'required',
        'direccion' => 'required',
        'celular' => 'required',
        ]);
          if($validator->fails()){
          return response(['error'=>$validator->errors(),'Validation Error']);    
          }
        $empleado = Empleado::create($input);
        return redirect('/empleados');
    }
}
