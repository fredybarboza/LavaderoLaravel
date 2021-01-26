<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'id_usuario',
        'id_categoria',
        'marca',
        'modelo',
        'matricula',
        'color',
    ];
}
