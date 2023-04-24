@extends('layoutsAdmin.header')

@section('contenedor')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Corretajes</h3>
            </div>
            <div class="col-6">
                <p>Personas solicitantes de corretaje:</p>
            </div>
            <div class="col-12">
            <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Fecha:</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($corretajes as $corretaje)
            <tr>
                <td>{{$corretaje->nombrecompleto}}</td>
                <td>{{$corretaje->correo}}</td>
                <td>{{$corretaje->telefono}}</td>
                <td>{{$corretaje->rol}}</td>
                <td>{{($corretaje->estado = 1)? 'Activo': 'Inactivo'}}</td>
                <td>{{$corretaje->created_at}}</td>
                <td><button class="btn btn-warning">Quitar</button></td>
            </tr>
        @endforeach    
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Fecha:</th>
                <th>Operaciones</th>
            </tr>
        </tfoot>
    </table>
            </div>
        </div>
    </div>

@endsection