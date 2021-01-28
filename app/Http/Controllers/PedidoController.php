<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\Models\Empleado;

class PedidoController extends Controller
{
    
    public function index()
    {
        echo 'Tiene permiso de ver';
    }

    public function assignView($id){
        $empleados = Empleado::get()->all();
        return view('asignar',compact('id','empleados'));
    }

    public function assignEmployee(Request $request){
        $pedido = Pedido::find($request->id);
        $pedido->id_empleado_encargado=$request->id_empleado;
        $pedido->save();
    }

    public function destroy(Pedido $pedido)
    {
        echo 'Puede eliminar';
    }
}
