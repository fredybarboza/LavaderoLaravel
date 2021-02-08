<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_usuario',
        'nombre',
        'apellido',
        'ci',
        'direccion',
        'celular',
        'created_at',
        'updated_at'
    ];
}
