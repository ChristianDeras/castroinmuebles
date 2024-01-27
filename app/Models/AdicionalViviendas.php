<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdicionalViviendas extends Model
{
    use HasFactory;
    protected $table = 'adicional_viviendas';

    protected $fillable = [
        'id',
        'detalle1',
        'detalle2',
        'detalle3',
        'detalle4',
        // Otros campos del detalle...
    ];
}
