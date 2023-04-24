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
}
