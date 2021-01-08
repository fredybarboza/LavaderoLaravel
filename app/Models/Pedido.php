<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_servicio',
        'monto',
        'nombre',
        'ci',
        'descripcion_vehiculo',
        'color_vehiculo',
        'chapa_vehiculo',
        'estado',
        'id_empleado_encargado',
        'created_at',
        'updated_at'
    ];
}
