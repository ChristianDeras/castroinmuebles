@extends('layouts.header')

@section('contenidoPrincipal')
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12 ">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                            <img src="/Img/rascacielos.jpg" alt="" class="img-fluid rounded-4" width="400">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                            <img src="/Img/rascacielos.jpg" alt="" class="img-fluid rounded-4" width="400">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                            <img src="/Img/rascacielos.jpg" alt="" class="img-fluid rounded-4" width="400">

                        </div>
                    </div>

                </div>


                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
            <h3>Servicios:</h3>
            <div class="col-md-12 col-sm-12 col-xxl-12">
                <div class=" data d-flex justify-content-center align-items-center ">
                    <ul
                        class="font-rowdies-scalable d-flex justify-content-center flex-wrap ul-info align-items-center">
                        <li class="w-100">Vista al mar</li>
                        <li class="w-100">Centros comerciales cercanos</li>
                        <li class="w-100">1 cochera</li>
                    </ul>
                </div>
            </div>

            <!-- <h3>!Hey veamos una muestra en 360°¡</h3>
            <div class="col-md-12 col-sm-12 col-xxl-12">
                <button type="submit" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal">Abrir
                    360°</button>
            </div> -->
        </div>
        <div class="col-md-6 col-sm-12">
            <h2 class="font-rowdies text-center">{{$vivienda->nombreinmueble}}</span></h2>
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
                            {{$vivienda->detalle}}
                            <br>
                            <br>
                            {{$vivienda->descripcion}}
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
@endsection