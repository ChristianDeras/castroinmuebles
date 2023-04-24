<?php

namespace App\Http\Controllers;

use App\Models\Remodelacion;
use Illuminate\Http\Request;

class RemodelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('remodelacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('remodelacion.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $remodelacion = new Remodelacion();
        $remodelacion->nombrecompleto = $request->get('nombrecompleto');
        $remodelacion->correo = $request->get('correo');
        $remodelacion->telefono = $request->get('telefono');
        $remodelacion->tipo = $request->get('tipo');
        $remodelacion->presupuesto = $request->get('presupuesto');
        $remodelacion->departamento = $request->get('departamento');
        $remodelacion->municipio = $request->get('municipio');

        $remodelacion->estado = 1;

        $remodelacion->save();

        return redirect('/')->with('success','Formulario enviado exitosamente');
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
