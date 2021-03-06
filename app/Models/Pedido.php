<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_usuario',
        'id_vehiculo',
        'id_servicio',
        'monto',
        'estado',
        'id_empleado_encargado',
        'created_at',
        'updated_at'
    ];
}
