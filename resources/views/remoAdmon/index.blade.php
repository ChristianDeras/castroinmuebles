@extends('layoutsAdmin.header')

@section('contenedor')

<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Remodelaciones</h3>
            </div>
            <div class="col-6">
                <p>Personas solicitantes de corretaje:</p>
                <a href="/AdminRemodelaciones/1" class="btn btn-warning">Activos</a>
                <a href="/AdminRemodelaciones/0" class="btn btn-warning">Atendidos</a>
                <a href="/AdminRemodelaciones" class="btn btn-warning">Mostrar todo</a>
            </div>
            <div class="col-12 mt-2">
            <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Presupuesto</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Estado</th>
                <th>Fecha:</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($remo as $remos)
            <tr>
                <td>{{$remos->nombrecompleto}}</td>
                <td>{{$remos->correo}}</td>
                <td>{{$remos->telefono}}</td>
                <td>{{$remos->tipo}}</td>
                <td>${{$remos->presupuesto}}</td>
                <td>{{$remos->departamento}}</td>
                <td>{{$remos->municipio}}</td>
                <td>{{($remos->estado == 1)? 'Activo': 'Inactivo'}}</td>
                <td>{{$remos->created_at}}</td>
                <td>
                <form action="{{ route('AdminRemodelaciones.actualizarestado', $remos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning w-100 {{($remos->estado==0)? 'disabled':''}}" > {{($remos->estado==1)? 'Atender':'Ya atendido'}}</button>
                </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Presupuesto</th>
                <th>Departamento</th>
                <th>Municipio</th>
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