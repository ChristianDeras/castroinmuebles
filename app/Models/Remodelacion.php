<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remodelacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrecompleto',
        'correo',
        'telefono',
        'tipo',
        'presupuesto',
        'departamento',
        'municipio',
        'estado'
    ];
}
