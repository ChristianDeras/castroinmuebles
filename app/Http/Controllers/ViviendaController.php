<?php

namespace App\Http\Controllers;

use App\Models\Vivienda;
use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viviendaAdmin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreinmueble' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'detalle' => 'required|string',
            'precio' => 'required|numeric',
            'habitaciones' => 'required|integer',
            'sanitarios' => 'required|integer',
            'plantas' => 'required|integer',
        ]);
    
        // Crear un nuevo inmueble
        $vivienda = new Vivienda();
        $vivienda->nombreinmueble = $request->get('nombreinmueble');
        $vivienda->descripcion = $request->get('descripcion');
        $vivienda->detalle = $request->get('detalle');
        $vivienda->precio = $request->get('precio');
        $vivienda->habitaciones = $request->get('habitaciones');
        $vivienda->sanitarios = $request->get('sanitarios');
        $vivienda->plantas = $request->get('plantas');
        $vivienda->estado = 'Activo';
        $vivienda->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
