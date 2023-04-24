<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extranjero extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrecompleto',
        'dui',
        'telefono',
        'correo',
        'descripcion'
    ];
}
