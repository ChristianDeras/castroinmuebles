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
}
