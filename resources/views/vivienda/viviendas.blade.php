@extends('layouts.header')

@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12 ">
            <!-- Slider main container -->
            <div class="swiper h-75 w-75">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
            
                    @foreach ($detalleviviendas as $detallevivienda)
                    <div class="swiper-slide d-flex justify-content-center align-items-center" >
                        <div class="container d-flex justify-content-center align-items-center">
                            <img src="{{$detallevivienda->rutaImagen}}" alt="" style="z-index:9999999;" class="img-fluid rounded-4 overflow-hidden imagen-modal" onclick="abrirModal('{{$detallevivienda->rutaImagen}}')" width="300" height="300">
                        </div>
                    </div>
                    @endforeach

                </div>


                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
            

            <!-- <h3>!Hey veamos una muestra en 360°¡</h3>
            <div class="col-md-12 col-sm-12 col-xxl-12">
                <button type="submit" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal">Abrir
                    360°</button>
            </div> -->
        </div>
        <div class="col-md-6 col-sm-12">
            <h2 class="font-rowdies text-center">{{$vivienda->nombreinmueble}}</span></h2>
            <h2 class="font-rowdies text-center">Tel: 7122-0568</h2>
            <h3>Detalles:</h3>
            <div class="row g-3">
                <div class="col-md-6 col-sm-12 col-xxl-12  ">
                    <div class="data d-flex justify-content-center align-items-center ">
                        <div class="circle-sm d-flex justify-content-center align-items-center m-2">
                            <i class="fa-solid fa-house ml"></i>
                        </div>
                        <span class="font-rowdies-scalable">Habitaciones:
                            <span><b>{{$vivienda->habitaciones}}</b></span></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xxl-12">
                    <div class="data d-flex justify-content-center align-items-center ">
                        <div class="circle-sm d-flex justify-content-center align-items-center m-2">
                            <i class="fa-solid fa-toilet ml"></i>
                        </div>
                        <span class="font-rowdies-scalable">Cantidad de baños:
                            <span><b>{{$vivienda->sanitarios}}</b></span></span>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xxl-12  ">
                    <div class="data d-flex justify-content-center align-items-center ">
                        <div class="circle-sm d-flex justify-content-center align-items-center m-2">
                            <i class="fa-solid fa-house ml"></i>
                        </div>
                        <span class="font-rowdies-scalable">Cantidad de plantas:
                            <span><b>{{$vivienda->plantas}}</b></span></span>
                    </div>
                </div>
                <h3>Descripcion:</h3>
                <div class="col-md-12 col-sm-12 col-xxl-12">
                    <div class=" data d-flex justify-content-around align-items-center ">
                        <span>
                            {{$vivienda->descripcion}}
                        </span>
                    </div>
                </div>
            </div>

            <h3>Adicionales:</h3>
            <div class="col-md-12 col-sm-12 col-xxl-12">
                <div class=" data d-flex justify-content-center align-items-center ">
                    <ul
                        class="font-rowdies-scalable d-flex justify-content-center flex-wrap ul-info align-items-center">
                        @foreach ($adicionalviviendas as $adicional)
                            <li class="w-100">{{$adicional->Detalle3}}</li>
                            <li class="w-100">{{$adicional->Detalle2}}</li>
                            <li class="w-100">{{$adicional->Detalle3}}</li>
                            <li class="w-100">{{$adicional->Detalle4}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="modal" class="modal">
                        <span class="cerrar" onclick="cerrarModal()">&times;</span>
                         <img id="imagen-modal" src="" alt="Imagen" class="modal-contenido">
                    </div>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" style="z-index: 9999;" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a-scene>
                    <a-sky src="/Img/Buhardilla 360 Inmobiliaria - Descargas360.jpg" rotation="0 -130 0"></a-sky>

                    <a-text font="kelsonsans" value="Puy de Sancy, France" width="6" position="-2.5 0.25 -1.5"
                        rotation="0 15 0"></a-text>
                </a-scene>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<script src="/Js/main.js"></script>
<script>
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
</script>

<script>
    function abrirModal(imagenSrc) {
    var modal = document.getElementById("modal");
    var imagenModal = document.getElementById("imagen-modal");
    
    // Establece la fuente de la imagen modal
    imagenModal.src = imagenSrc;
    
    modal.style.display = "block";
}

function cerrarModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
}

// Cierra el modal si se hace clic fuera de la imagen
window.onclick = function(event) {
    var modal = document.getElementById("modal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
</script>
@endsection