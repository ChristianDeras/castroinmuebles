<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/css/stylesLogin.css') }}" />
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e073e6168c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}" />
</head>

<body>
    <div class="contenedor d-flex vh-100">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white login-r" style="width: 280px;">
            <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Castro Admin</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item ">
                    <a href="/AdminCorretajes"
                        class=" nav-link text-white cl {{  request()->is('AdminCorretajes') ? 'active' : ''}}"
                        aria-current="page">
                        <i class="fa-solid fa-house-chimney-crack"></i>
                        Corretajes
                    </a>
                </li>
                <li class="">
                    <a href="/AdminRemodelaciones"
                        class="nav-link text-white {{  request()->is('AdminRemodelaciones') ? 'active' : ''}}">
                        <i class="fa-solid fa-truck-monster"></i>
                        Remodelaciones
                    </a>
                </li>
                <li>
                    <a href="/AdminCompradores"
                        class="nav-link text-white {{  request()->is('AdminCompradores') ? 'active' : ''}}">
                        <i class="fa-solid fa-person-circle-plus"></i>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="/AdminExtranjeros"
                        class="nav-link text-white {{  request()->is('AdminExtranjeros') ? 'active' : ''}}">
                        <i class="fa-solid fa-flag-usa"></i>
                        Extranjeros
                    </a>
                </li>
                <li>
                    <a href="/AdminViviendas"
                        class="nav-link text-white {{  request()->is('AdminViviendas') ? 'active' : ''}}">
                        <i class="fa-solid fa-house"></i>
                        Agregar Vivienda
                    </a>
                </li>
                <li>
                    <a href="/informacionAdicional"
                        class="nav-link text-white {{  request()->is('informacionAdicional') ? 'active' : ''}}">
                        <i class="fa-solid fa-house"></i>
                        Agregar Información
                    </a>
                </li>
                <li>
                    <a href="/DetalleViviendas"
                        class="nav-link text-white {{  request()->is('DetalleViviendas') ? 'active' : ''}}">
                        <i class="fa-solid fa-upload"></i>
                        Manejar imagenes
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Carlos Castro</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Ajustes</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
        @yield('contenedor')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>

</html>