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
}
