<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

class PedidoController extends Controller
{
    
    public function index()
    {
        echo 'Tiene permiso de ver';
    }

    public function destroy(Pedido $pedido)
    {
        echo 'Puede eliminar';
    }
}
