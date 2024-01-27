<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreinmueble',
        'descripcion',
        'detalle',
        'precio',
        'habitaciones',
        'sanitarios',
        'plantas',
        'estado'
    ];
}
