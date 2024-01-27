<?php

namespace App\Http\Controllers;

use App\Models\AdicionalViviendas;
use App\Models\Vivienda;
use Illuminate\Http\Request;

class InformacionViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viviendas = Vivienda::all();
        return view('infoViviendas.index',compact('viviendas'));
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
        $detalle = new AdicionalViviendas();
        $detalle->vivienda_id = $request->get('vivienda_id');

        $request->validate([
            'vivienda_id' => 'unique:adicional_viviendas,vivienda_id', // Asegura que vivienda_id sea único en la tabla detalles
        ]);

        $detalle->detalle1 = $request->get('detalle1');
        $detalle->detalle2 = $request->get('detalle2');
        $detalle->detalle3 = $request->get('detalle3');
        $detalle->detalle4 = $request->get('detalle4');

        $detalle->save();

        return view('infoViviendas.index');
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
