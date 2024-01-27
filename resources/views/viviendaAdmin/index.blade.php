@extends('layoutsAdmin.header')

@section('contenedor')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-12">
            <div class="card">
                <div class="card-header">Agregar Nuevo Inmueble</div>

                <div class="card-body">
                    <form method="POST" action="/AdminViviendas">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col-6">
                            <label for="nombreinmueble" class="text-md-right">Nombre del Inmueble</label>
                                <input id="nombreinmueble" type="text" class="form-control" name="nombreinmueble" required autofocus>
                            </div>

                            

                            <div class="col-md-6">
                            <label for="descripcion" class="text-md-right">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" required></textarea>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group row">
                            <label for="detalle" class="text-md-right">Detalles</label>

                            <div class="col-md-12">
                                <textarea id="detalle" class="form-control" name="detalle" required></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            

                            <div class="col-md-2 col-sm-12">
                            <label for="precio" class="text-md-right">Precio</label>
                                <input id="precio" type="number" class="form-control" name="precio" required>
                            </div>

                            <div class="col-md-2 col-sm-12">
                            <label for="habitaciones" class="text-md-right">Habitaciones</label>
                                <input id="habitaciones" type="number" class="form-control" name="habitaciones" required>
                            </div>

                            <div class="col-md-2 col-sm-12">
                            <label for="sanitarios" class="text-md-right">Sanitarios</label>
                                <input id="sanitarios" type="number" class="form-control" name="sanitarios" required>
                            </div>

                            <div class="col-md-2 col-sm-12">
                            <label for="plantas" class="text-md-right">Plantas</label>
                                <input id="plantas" type="number" class="form-control" name="plantas" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    Guardar Inmueble
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