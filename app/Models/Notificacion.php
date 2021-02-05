<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_usuario',
        'mensaje',
        'estado',
        'servicio',
        'created_at',
        'updated_at'
    ];
}
