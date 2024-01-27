@extends('layoutsAdmin.header')

@section('contenedor')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-12">
            <div class="card">
                <div class="card-header">Agregar Información adicional</div>

                <div class="card-body">
                    <form method="POST" action="/informacionAdicional">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-6">
                            <label for="vivienda_id" class="text-md-right">Selecciona una vivienda:</label>
                                <select name="vivienda_id" id="vivienda_id" class="form-control">
                                    @foreach ($viviendas as $vivienda)
                                        <option value="{{ $vivienda->id }}">{{ $vivienda->nombreinmueble }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-12 col-sm-12">
                                <label for="detalle1" class="text-md-right">Detalle 1:</label>
                                <input type="text" name="detalle1" id="detalle1" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            

                            <div class="col-md-12 col-sm-12">
                                <label for="detalle2" class="text-md-right">Detalle 2:</label>
                                <input type="text" name="detalle2" id="detalle2" class="form-control">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="detalle3" class="text-md-right">Detalle 3:</label>
                                <input type="text" name="detalle3" id="detalle3" class="form-control">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="detalle4" class="text-md-right">Detalle 4:</label>
                                <input type="text" name="detalle4" id="detalle4" class="form-control">
                            </div>

                            
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    Guardar Información
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection