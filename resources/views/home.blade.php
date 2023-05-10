@extends('layouts.header')

@section('contenidoPrincipal')
<div id="info" class="p-5 text-center bg-image d-flex justify-content-center" style="
        background-image: url('/Img/hero.jpg');
        background-image: no-repeat;
        background-image: fixed;
        background-image: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 550px;
      ">
    <div class="mask w-100" style="background-color: rgba(31, 41, 40, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white d-flex justify-content-center flex-column align-items-center">
                <div class=" d-flex justify-content-center align-items-center"><img src="/Img/logo.png"
                        alt="" class="img-fluid" width="600"></div>
                <h4 class="mb-3 font-rowdies mt-2">
                    Buscamos brindarle una atencion asesorada en cada momento del
                    tramite
                </h4>
                <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#modalCliente"
                    id="about">Perfecto, muestrame</a></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<button type="button" class="btn-flotante" data-bs-toggle="modal" data-bs-target="#Extranjero">
    <span class="text-light position">¿Eres salvadoreño en el exterior?</span>
</button>


<!-- Modal Extranjero -->
<div class="modal fade mt-5" id="Extranjero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario de contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        
                    </div>
                    <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                        <div class='cards'>
                                <div class='icon'>
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class='texts'>
                                    <h2>¿Necesitas algún documento de oficinas de gobierno/alcaldias?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                        <div class='cards'>
                                <div class='icon'>
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class='texts'>
                                    <h2>¿Necesitas información o documentos de oficinas privadas?</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container  d-flex justify-content-center align-items-center">
                        <div class='cards'>
                                <div class='icon'>
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class='texts'>
                                    <h2>¿Necesitas agún mandado u otro tipo de gestion/servicio?</h2>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" data-bs-target="#formulario" data-bs-toggle="modal">Contactanos</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formulario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Formulario de contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="h3">Beneficios</div>
                        <hr>
                        <div class="list">
                            <ul>
                                <li>Formulario de contacto con la solicitud de servicio</li>
                                <li>Comunicación directa por WhatsApp</li>
                                <li>Investigación de requisitos sobre trámite solicitado</li>
                                <li>Nos comprometemos por medio de un contrato a realizar el trámite (previa revisión y
                                    verificación
                                    de que es posible realizarlo)</li>
                                <li>Luego de la presentacion del servicio le enviamos una encuesta de satisfacción</li>
                                <li>Tenemos dos modalidades de pago: 1. Subscripción mensual, en este caso tendrá
                                    derecho a solicitar tramites cada més
                                    2. Pago por servicio, en ese caso se le cobrará por tramite.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <form action="/extranjeros" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <label for="Nombre" class="form-label">Nombre completo:</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su nombre completo
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="edad" class="form-label">Tipo de documento de identificación, DUI o
                                        pasaporte (Se usará para elaborar contrato)</label>
                                    <input type="text" id="dui" name="dui" class="form-control" required>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese una edad válida
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="tel" class="form-label">Numeros de teléfono de contacto:</label>
                                    <input type="text" id="tel" name="tel" class="form-control" required>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un celular
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="correo" class="form-label">Correo electrónico:</label>
                                    <input type="mail" id="correo" name="correo" class="form-control" required>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su correo completo
                                    </div>
                                </div>
                                <div class="col-12">

                                    <label for="residendica" class="form-label">Describa su solicitud:</label>
                                    <textarea id="descripcion" name="descripcion" cols="90" rows="10">
                    </textarea>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su direccion
                                    </div>
                                </div>

                                <div id="contenedor">

                                </div>
                                <button type="submit" class="btn btn-primary mt-3 mb-3">Enviar solicitud</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#Extranjero" data-bs-toggle="modal">Regresar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade mt-5" id="modalCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Datos de comprador</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="/compradores" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <label for="Nombre" class="form-label">Nombre completo:</label>
                                <input type="text" id="nombre" name="nombrecompleto" class="form-control" required>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese su nombre completo
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="edad" class="form-label">Edad:</label>
                                <input type="number" id="edad" name="edad" class="form-control" required>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese una edad válida
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="tel" class="form-label">Teléfono:</label>
                                <input type="text" id="tel" name="telefono" class="form-control" required>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese un celular
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="correo" class="form-label">Correo:</label>
                                <input type="mail" id="correo" name="correo" class="form-control" required>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese su correo completo
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="residendica" class="form-label">Residencia:</label>
                                <input type="mail" id="residendica" name="residencia" class="form-control" required>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese su direccion
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                                <select name="nacionalidad" id="nacionalidad" class="form-control" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="Nacional" id="resp">Salvadoreña</option>
                                    <option value="Extranjero" id="resp">Extranjera</option>
                                </select>
                                <div class="valid-feedback">
                                    Todo bien
                                </div>
                                <div class="invalid-feedback">
                                    Por favor ingrese su residencia
                                </div>
                            </div>

                            <div id="contenedor">

                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Enviar solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center align-items-center ">
    <div class="separator d-flex justify-content-around align-items-center">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
</div>
@if ($message = Session::get('success'))
<script>
Swal.fire({
    icon: 'success',
    title: '¡Muy bien!',
    text: '{{ $message }}',
})
</script>
@endif

<div class="container-fluid section-color">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center font-rowdies">¿Quienes somos?</h1>
        </div>
    </div>

    <div class="row aniview" data-av-animation="slideInRight">
        <div class="col-sm-8 d-flex justify-content-center align-items-center mt-5">
            <div class="info w-75 justify">
                <span class="font-normal">Somos una agencia inmobiliaria encargada de la compra y venta de viviendas con
                    más de 15 años de experiencia
                    en el rubro, nuestro objetivo es asesorarte de la mejor manera y ofrecerte una atención de calidad,
                    acontinuación
                    en la web puedes encontrar información de contacto y de tramites para obtener mayor
                    información</span>
                <br>
                <br>
                <span class=""><b>Carlos Castro.</b></span>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="img d-flex justify-content-center position-relative align-items-center">
                <div class="shape">
                    <img src="/Img/triangulo1.png" alt="" class="img-fluid overflow">
                </div>
                <img src="/Img/hombre2.png" alt="" class="img-fluid rounded-circle" width="200">
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center align-items-center " id="servicios">
    <div class="separator d-flex justify-content-around align-items-center">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
</div>
<!-- Inicio de servicios -->
<div class="row mt-5">
    <div class="col-sm-12">
        <h1 class="text-center font-rowdies">Servicios</h1>
    </div>
</div>


<div class="stacked-cards mt-5">
    <ul>
        <li>
            <div class="container">
                <div class="row d-flex flex-column">
                    <div class="col-12">
                        <h4 class="text-center">Remodelaciones y construcciones</h4>
                    </div>
                    <div class="row mt-3">
                        <div
                            class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center d-none d-sm-none d-md-flex">
                            <i class="fa-solid fa-person-digging" style="font-size:7.5rem;"></i>
                        </div>
                        <div class="col-md-6 col-sm-12 d-flex  justify-content-center flex-column">
                            <p class="">Ofrecemos servicios de remodelación y construcción para su vivienda</p>
                            <a href="/remodelaciones/create"
                                class="text-decoration-none btn btn-dark text-light">Acceder al servicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="container">
                <div class="row d-flex flex-column">
                    <div class="col-12">
                        <h4 class="text-center">Servicio de Corretaje</h4>
                    </div>
                    <div class="row mt-3 d-flex justify-content-center">
                        <div
                            class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center d-none d-sm-none d-md-flex">
                            <i class="fa-solid fa-house-laptop" style="font-size:7.5rem;"></i>
                        </div>
                        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center flex-column">
                            <p class="card-text">El mejor servicio para poder vender tu propiedad.</p>
                            <a href="/corretajes/create" class="text-decoration-none btn btn-dark text-light">Acceder al
                                servicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="container">
                <div class="row d-flex flex-column">
                    <div class="col-12">
                        <h4 class="text-center">Servicios extra</h4>
                    </div>
                    <div class="row mt-3">
                        <div
                            class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center d-none d-sm-none d-md-flex">
                            <i class="fa-regular fa-map" style="font-size:7.5rem;"></i>
                        </div>
                        <div class="col-md-6 col-sm-12 d-flex align-items-center flex-column">
                            Realizamos servicios de:
                            <ul class="">
                                Valuos, Mediciones
                                <br>
                                Remediciones,
                                Lotificaciones
                            </ul>
                            <a href="/corretajes/create" class="text-decoration-none btn btn-dark text-light">Acceder al
                                servicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>


    </ul>
</div>



<div class="container visually-hidden">

    <div class="row">

        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview " data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Servicio de corretaje</h5>
                        <p class="card-text">El mejor servicio para poder vender tu propiedad.</p>
                        <button type="button" class="btn btn-success btn-color "><a href="/corretajes/create"
                                class="text-decoration-none font-primary">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview " data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100 ">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Remodelaciones y construcciones</h5>
                        <p class="card-text">Ofrecemos servicios de remodelación y construcción para su vivienda solo
                            deverás rellenar
                            un pequeño formulario acontinuación.
                        </p>
                        <button type="button" class="btn btn-success btn-color"><a href="/remodelaciones/create"
                                class="text-decoration-none font-primary">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview" data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Servicios extra</h5>
                        <p class="card-text">
                            Realizamos servicios de:
                        <ul class="d-flex justify-content-around">
                            <li>Valuos</li>
                            <li>Mediciones</li>
                            <li>Remediciones</li>
                            <li>Lotificaciones</li>
                        </ul>
                        </p>
                        <button type="button" class="btn btn-success btn-color" id="viviendas"><a href="/corretaje"
                                class="text-decoration-none font-primary">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- Inicio de servicios -->
<div class="row mt-5">
    <div class="col-sm-12">
        <h1 class="text-center font-rowdies">Viviendas</h1>
    </div>
</div>


<div class="viviendas position-relative d-flex flex-wrap">
    <div class="shape2">
        <img src="/Img/Barras izq 2.png" alt="" class="img-fluid">
    </div>
    <div class="row d-flex justify-content-center w-100">
        @foreach ($viviendas as $vivienda)
        <div class="col-md-4 col-sm-12">
            <div class="profile-card-4 text-center aniview" data-av-animation="pulse"><img src="/Img/hero.webp"
                    class="img img-fluid">
                <div class="profile-content mt-3">
                    <div class="profile-name">{{$vivienda->nombreinmueble}}
                    </div>
                    <div class="profile-description ">{{$vivienda->descripcion}}</div>
                    <div class="row d-flex ">
                        <div class="col-12">
                            <div class="profile-overview">
                                <b>Precio</b>
                                <h3>$ {{$vivienda->precio}}</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="profile-overview">
                                <button class="btn btn-success"><a href="/viviendas/{{$vivienda->id}}"
                                        class="text-decoration-none" style="color:white;">Más información</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <script src="{{ asset('js/resources.js') }}"></script>

    <script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
    <script>
    var stackedCard = new stackedCards({
        selector: '.stacked-cards',
        layout: "slide",
        transformOrigin: "center",
    });

    stackedCard.init();
    </script>

    <script>
        $(document).ready(function () {
            $('#Extranjero').modal('toggle');
        })
    </script>
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