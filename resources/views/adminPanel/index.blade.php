@extends('layoutsAdmin.header')

@section('contenedor')
<div class="container-fluid  ">
    <div class="row mt-5">
        <div class="col-4">
            <div class="cardd">
                <div class="contenido">
                    <div class="texto">
                        Corretajes atendidos: 
                        <h3>{{ $corretajesAtendidos = session('corretajesAtendidos'); }}</h3>
                    </div>
                    <div class="icon">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="cardd">
                <div class="contenido">
                    <div class="texto">
                        Remodelaciones atendidas:
                        <h3>{{$remodelacionesAtendidas = session('remodelacionesAtendidas');}}</h3>
                    </div>
                    <div class="icon">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="cardd">
                <div class="contenido">
                    <div class="texto">
                        Corretajes pendientes:
                        <h3>{{$corretajesNoAtendidos = session('corretajesNoAtendidos');}}</h3>
                    </div>
                    <div class="icon">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 mt-5">
            <div class="carddex">
            <div class="contenido">
                    <div class="texto">
                        Remodelaciones pendientes:
                        <h3>{{$remodelacionesNoAtendidas = session('remodelacionesNoAtendidas');}}</h3>
                    </div>
                    <div class="icon">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 mt-5">
            <div class="carddex">
            <div class="contenido">
                    <div class="texto">
                        Total de viviendas guardadas:
                        <h3>{{$imagenes = session('imagenes');}}</h3>
                    </div>
                    <div class="icon">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection