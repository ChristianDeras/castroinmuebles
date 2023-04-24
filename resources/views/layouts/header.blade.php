<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Importando dependecias CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/stylesCustom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stackedCards.css') }}" />
    <title>Bienes Y Raices</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/animate.css@3.7.2"> <!-- legacy -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
    <link href="https://cdn.rawgit.com/mistic100/Photo-Sphere-Viewer/3.1.0/dist/photo-sphere-viewer.min.css"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/threejs/r70/three.min.js"> </script>
    <script src="https://cdn.rawgit.com/mistic100/Photo-Sphere-Viewer/3.1.0/dist/photo-sphere-viewer.min.js"> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/e073e6168c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/stackedCards.js') }}"></script>
    <script src="{{ asset('js/jquery.aniview.js') }}"></script>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-custom navbar-mainbg sticky-top " style="z-index:9999999;">
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/#about"><i class="fa-regular fa-address-card"></i></i>¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#servicios"><i class="far fa-clone"></i>Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#viviendas"><i class="fa-solid fa-house-chimney-window"></i>Viviendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog"><i class="far fa-chart-bar"></i>Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa-solid fa-phone"></i>Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav
      class=" d-none navbar Cnavbar navbar-expand-lg bg-body-tertiary sticky-top font navbarExp"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-around "
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav d-flex">
            <li class="nav-item ">
              <a class="nav-link " aria-current="page" href="#about"
                >¿Quienes somos?</a
              >
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/#servicios">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#viviendas">Viviendas</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="progress-bar bg-dark">
      <div id="progress" class="progress"></div>
    </div>

    @yield('contenidoPrincipal')

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
      var options = {
    animateClass: 'animated', // for v3 or 'animate__animated' for v4
    animateThreshold: 100,
    scrollPollInterval: 20
}
$('.aniview').AniView(options);
    </script>
    <script>
      
    </script>
  </body>
</html>