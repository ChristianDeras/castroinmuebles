<?php

namespace App\Http\Controllers;

use App\Models\Corretaje;
use Illuminate\Http\Request;

class CorretajeAdminController extends Controller
{
    public function index()
    {
        $corretajes = Corretaje::all();
        return view('corretajesAdmon.index')->with('corretajes',$corretajes);
    }

    public function filtrarActivos($estado)
    {
        $corretajes = Corretaje::where('estado',$estado)->get();
        return view('corretajesAdmon.index')->with('corretajes',$corretajes);
    }

    public function actualizarEstado($id)
    {
        $corretaje = Corretaje::findOrFail($id);
        $corretaje->estado = 0; // Cambiar el estado a inactivo
        $corretaje->save(); // Guardar los cambios en la base de datos
        $corretajes = Corretaje::all();
        return view('corretajesAdmon.index')->with('corretajes',$corretajes);
    }
}
