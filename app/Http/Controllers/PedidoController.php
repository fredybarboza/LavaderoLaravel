<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;
use App\Models\Empleado;
use App\Models\User;
use App\Models\Notificacion;

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

    public function rechazarPedido($id){
        $pedido = Pedido::find($id);
        $n = $pedido->id_usuario;
        $s = $pedido->id_servicio;
        $pedido->delete();
        $notificacion = new Notificacion;
        $notificacion->id_usuario = $n;
        $notificacion->mensaje = "Lo sentimos. Su pedio ha sido Rechazado. ID: $id";
        $notificacion->servicio = $s;
        $notificacion->save();
        return redirect('/home');
    }

    public function assignEmployee(Request $request){
        $pedido = Pedido::find($request->id);
        $pedido->estado= "2";
        $pedido->id_empleado_encargado=$request->id_empleado;
        $empleado = Empleado::find($request->id_empleado);
        if($empleado!=null){
            $pedido->save();
            return redirect('/home');
        }
        else{
            echo "ID NO VÁLIDO";
        }
        
    }

    public function finalizarPedido($id)
    {
        $pedido = Pedido::find($id);
        $n = $pedido->id_usuario;
        $s = $pedido->id_servicio;
        $pedido->estado= "3";
        $pedido->save();
        //NOTIFICACION
        $notificacion = new Notificacion;
        $notificacion->id_usuario = $n;
        $notificacion->mensaje = "Pedido finalizado! ID: $id";
        $notificacion->servicio = $s;
        $notificacion->save();
        return redirect('/pedidos');
    }

    public function getFinalizados(){
        $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.monto','vehiculos.marca','vehiculos.modelo','vehiculos.matricula')
                  ->join('vehiculos', 'pedidos.id_vehiculo', '=', 'vehiculos.id')
                  ->where('estado','3')->get();
        $n = sizeof($pedidos);
        return view('Pedidos.finalizados',compact('pedidos','n'));
    }

    public function viewFactura($id){
        
        $pedidos = Pedido::find($id);
        
        if($pedidos==null){
            echo "Factura no disponible";
        }
        else{
            if($pedidos->estado=='3'){
                $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.monto', 'user_data.nombre', 'user_data.apellido', 'user_data.ci', 'user_data.direccion')
                  ->join('user_data', 'pedidos.id_usuario', '=', 'user_data.id_usuario')
                  ->where('pedidos.id',$id)->get();
                return view('Pedidos.factura',compact('pedidos',));
            }
            else{
                echo "Factura no disponible";
            }
        }
    }
}
