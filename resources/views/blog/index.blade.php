@extends('layouts.header')

@section('contenidoPrincipal')
<div class="offcanvas offcanvas-start " style="z-index: 9999999;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Puedes buscar las categorías de tu interés!
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Categorias
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-10 p-5 d-flex justify-content-center  data-section">
            
            <div class=" w-75">
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
                    
                    
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner ">
                      <div class="carousel-item active position-relative">
                        <div class="destacado">
                            <span>Elemento destacado <i class="fa-solid fa-star" ></i></span>
                        </div>
                        <img src="/Img/hero.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-carrousell">
                            <h5>Titulo de la nota</h5>
                            <p>Descripcion breve del blog destacado</p>
                            <button class="btn btn-dark bg-white"><a href="post.html" class="text-decoration-none">Ver post</a></button>
                          </div>
                    </div>
                      <div class="carousel-item position-relative">
                        <div class="destacado">
                            <span>Elemento destacado <i class="fa-solid fa-star" ></i></span>
                        </div>
                        <img src="/Img/hero.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-carrousell">
                            <h5>Titulo de la nota</h5>
                            <p>Descripcion breve del blog destacado</p>
                            <button class="btn btn-dark">Ver post</button>

                          </div>
                    </div>
                      <div class="carousel-item position-relative">
                        <div class="destacado">
                            <span>Elemento destacado <i class="fa-solid fa-star" ></i></span>
                        </div>
                        <img src="/Img/hero.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-carrousell">
                            <h5>Titulo de la nota</h5>
                            <p>Descripcion breve del blog destacado</p>
                            <button class="btn btn-dark">Ver post</button>

                          </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class="row mt-5 " >
                    <div class="col-12"><h3 class="font-rowdies text-center">Recientes</h3></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-right-b bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-left-b bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-top-r bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-top-l bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-right-b bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-left-b bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-top-r bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card mb-3 position-relative overflow-hidden"  style="max-width: 540px;">
                            <div class="circle-big-top-l bg-black scale">

                            </div>
                            <div class="row g-0 d-flex justify-content-center align-items-center" style="z-index: 99999;">
                              <div class="col-md-4">
                                <img src="/Img/casa.jpeg" class="img-fluid rounded-2" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Titulo de la nota</h5>
                                  <p class="card-text">Pequeña reseña acerca de el tema tratado en...</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                  </div>
            </div>
            
        </div>
    </div>
  </div>
@endsection