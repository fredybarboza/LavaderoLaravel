<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pedidos = Pedido::where('estado','0')->get();
        $pedidos = Pedido::select('pedidos.id' ,'pedidos.id_servicio', 'pedidos.id_usuario','vehiculos.marca','vehiculos.matricula')
                  ->join('vehiculos', 'pedidos.id_vehiculo', '=', 'vehiculos.id')
                  ->get();
        return view('home',compact('pedidos'));
    }
}
