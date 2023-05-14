<?php

namespace App\Http\Controllers;

use App\Models\Remodelacion;
use Illuminate\Http\Request;

class RemodelacionAdminController extends Controller
{
   public function index()
   {
        $remo = Remodelacion::all();
        return view('remoAdmon.index')->with('remo',$remo);
   }
   public function filtrarActivos($estado)
   {
       $remo = Remodelacion::where('estado',$estado)->get();
       return view('remoAdmon.index')->with('remo',$remo);
   }
   public function actualizarEstado($id)
    {
        $remos = Remodelacion::findOrFail($id);
        $remos->estado = 0; // Cambiar el estado a inactivo
        $remos->save(); // Guardar los cambios en la base de datos
        $remo = Remodelacion::all();
        return view('remoAdmon.index')->with('remo',$remo);
    }
}
