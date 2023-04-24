@extends('layoutsAdmin.header')

@section('contenedor')

<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Extranjeros</h3>
            </div>
            <div class="col-6">
                <p>Personas solicitantes de Estados Unidos:</p>
            </div>
            <div class="col-12">
            <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dui</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Descripcion</th>
                <th>Fecha:</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($extranjeros as $extranjero)
            <tr>
                <td>{{$extranjero->nombrecompleto}}</td>
                <td>{{$extranjero->Dui}}</td>
                <td>{{$extranjero->telefono}}</td>
                <td>{{$extranjero->correo}}</td>
                <td>{{$extranjero->descripcion}}</td>
                <td>{{$extranjero->created_at}}</td>
                <td><button class="btn btn-warning">Quitar</button></td>
            </tr>
        @endforeach    
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Dui</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Descripcion</th>
                <th>Fecha:</th>
                <th>Operaciones</th>
            </tr>
        </tfoot>
    </table>
            </div>
        </div>
    </div>

@endsection