@extends('layoutsAdmin.header')

@section('contenedor')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Corretajes</h3>
            </div>
            <div class="col-6">
                <p>Personas solicitantes de corretaje:</p>
                <a href="/AdminCorretajes/1" class="btn btn-warning">Activos</a>
                <a href="/AdminCorretajes/0" class="btn btn-warning">Atendidos</a>
                <a href="/AdminCorretajes" class="btn btn-warning">Mostrar todo</a>
            </div>
            <div class="col-12 mt-2">
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
                <td>{{($corretaje->estado == 1)? 'Activo': 'Inactivo'}}</td>
                <td>{{$corretaje->created_at}}</td>
                <td>
                <form action="{{ route('AdminCorretajes.actualizarestado', $corretaje->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning w-100 {{($corretaje->estado==0)? 'disabled':''}}" > {{($corretaje->estado==1)? 'Atender':'Ya atendido'}}</button>
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
<script>
    
</script>
@endsection