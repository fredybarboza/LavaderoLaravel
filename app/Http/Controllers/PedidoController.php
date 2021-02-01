<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\Models\Empleado;

class PedidoController extends Controller
{
    
    public function index()//PEDIDOS EN EJECUCIÓN
    {
        $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.monto','vehiculos.marca','vehiculos.modelo','vehiculos.matricula')
                  ->join('vehiculos', 'pedidos.id_vehiculo', '=', 'vehiculos.id')
                  ->where('estado','2')->get();
        $n = sizeof($pedidos);
        return view('Pedidos.ejecutando',compact('pedidos','n'));
    }

    public function assignView($id){
        $empleados = Empleado::get()->all();
        return view('Pedidos.asignar',compact('id','empleados'));
    }

    public function assignEmployee(Request $request){
        $pedido = Pedido::find($request->id);
        $pedido->estado= "2";
        $pedido->id_empleado_encargado=$request->id_empleado;
        $empleado = Empleado::find($request->id_empleado);
        if($empleado!=null){
            $pedido->save();
        }
        else{
            echo "ID NO VÁLIDO";
        }
        
    }

    public function finalizarPedido($id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado= "3";
        $pedido->save();
        return redirect('/pedidos');
    }

    public function getFinalizados(){
        $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.monto','vehiculos.marca','vehiculos.modelo','vehiculos.matricula')
                  ->join('vehiculos', 'pedidos.id_vehiculo', '=', 'vehiculos.id')
                  ->where('estado','3')->get();
        $n = sizeof($pedidos);
        return view('Pedidos.finalizados',compact('pedidos','n'));
    }
}
