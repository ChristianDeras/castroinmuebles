@extends('layouts.header')

@section('contenidoPrincipal')

  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 p-2 d-flex justify-content-center  data-section">
            <div class=" w-100">
                  <div class="row mt-2 " >
                    <div class="col-12"><h3 class="font-rowdies text-center">Nova el salvador Blog</h3></div>
                    
                    
                  </div>
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
<div class="row p-3">
<div class="col-md-8 col-lg-8 col-sm-12">
    <div class="card overflow-hidden">
        <div style="height: 250px;" class="overflow-hidden d-flex justify-content-center align-items-center">
            <img src="/Img/plusvalia.jpg" class="card-img-top img-fluid" style="width: 100%; object-fit: cover;" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">¿Qué es la famosa plusvalía inmobiliaria y en la administración de los mismos?</h5>
          <p class="card-text">
            La vivienda es una de las inversiones más importantes en El Salvador, supondrá para la mayoría de nosotros el uso más o menos del 30% de nuestros ingresos mensuales, y si hay algo que nos gustaría, es que tal inversión se vea redituada en el tiempo.
            Una de l as formas de agregarle valor a
            nuestra casa es ...
          </p>
          <a href="#" class="btn btn-primary">Leer articulo</a>
        </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6 col-lg-6 col-sm-12">
        <div class="card overflow-hidden">
          <div style="height: 350px;" class="overflow-hidden d-flex justify-content-center align-items-center">
              <img src="/Img/inmo.jpg" class="card-img-top img-fluid" style="width: 100%; object-fit: cover;" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">El trabajo inmobiliario</h5>
            <p class="card-text">
              Muchas personas dicen dedicarse en El Salvador a “bienes y raíces” cuando en realidad únicamente proponen casas en redes sociales y cobran por ello sin conocer la profesión, peor aún, siempre están dispuestos a dejar pasar un buen cliente solo por no pagar lo que les corresponde de impuesto sobre la renta,
            </p>
            <a href="#" class="btn btn-primary">Leer articulo</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-12">
        <div class="card overflow-hidden">
          <div style="height: 350px;" class="overflow-hidden d-flex justify-content-center align-items-center">
              <img src="/Img/plusvalia.jpg" class="card-img-top img-fluid" style="width: 100%; object-fit: cover;" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    </div>
</div>

  <div class="col-md-4 col-lg-4 col-sm-12">
    a
  </div>
</div>
@endsection