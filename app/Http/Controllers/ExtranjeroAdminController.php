<?php

namespace App\Http\Controllers;

use App\Models\Extranjero;
use Illuminate\Http\Request;

class ExtranjeroAdminController extends Controller
{
    public function index()
    {
        $extranjeros = Extranjero::all();
        return view('extranjerosAdmon.index')->with('extranjeros',$extranjeros);
    }

    public function filtrarActivos($estado)
    {
        $extranjeros = Extranjero::where('estado',$estado)->get();
        return view('extranjerosAdmon.index')->with('extranjeros',$extranjeros);
    }
}
