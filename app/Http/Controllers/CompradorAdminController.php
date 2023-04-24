<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use Illuminate\Http\Request;

class CompradorAdminController extends Controller
{
    public function index()
   {
        $comp = Comprador::all();
        return view('remoAdmon.index')->with('comprador',$comp);
   }
}
