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
<button type="button" class="btn-flotante btn-pc" data-bs-toggle="modal" data-bs-target="#Extranjero">
    <span class="text-light position">¿Eres salvadoreño en el exterior?</span>
</button>

<button type="button" class="btn-flotante btn-movil" data-bs-toggle="modal" data-bs-target="#Extranjero-movil">
    <span class="text-light position">¿Eres salvadoreño en el exterior?</span>
</button>

<!-- Modal Extranjero PC-->
<div class="modal fade mt-5 popup-pc" style="z-index: 999999;" id="Extranjero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content bg-gray">
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <img src="/Img/publi1.jpg" class="img-fluid" alt="" height="500" width="500">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="container-fluid brd-left text-center bgNative font-primary">
                        <span class="text-disp">¡ Hacemos tus tramites por tí !</span>
                        <br>
                    </div>
                    <div class="cuerpo">
                        <span class="text-content">Si estas en el extranjero y necesitas hacer transferencias, depositos, cuido de tus familiares de tercera edad, tenemos el personal calificado.</span>
                    </div>
                    <div class="extras mt-5">
                        <span class="">Si estás en estados unidos y te preocupan tus familiares acá en el pais, te brindamos
                            atención calificada para cualquier tramite interno que necesites en El Salvador (Cuido de familiares, pago de recibos)
                            Fiestas sorpresas de cumpleaños.
                        </span>
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

<div class="modal fade mt-5 popup-movil" id="Extranjero-movil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content bg-gray">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <img src="/Img/publi1.jpg" class="img-fluid" alt="" height="500" width="500">
                </div>
            </div>
          
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" data-bs-target="#formulario-movil" data-bs-toggle="modal">Siguiente <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade mt-2" id="formulario-movil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¡Asesorate!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                    <div class="container-fluid brd-left text-center bgNative font-primary">
                        <span class="text-disp-movil">¡ Hacemos tus tramites por tí !</span>
                        <br>
                    </div>
                   
                    <div class="extras mt-5">
                        <span class="">Si estás en estados unidos y te preocupan tus familiares acá en el pais, te brindamos
                            atención calificada para cualquier tramite interno que necesites en El Salvador (Cuido de familiares, pago de recibos)
                            Fiestas sorpresas de cumpleaños.
                        </span>
                    </div>
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
            <div class="modal-header mt-5">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
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
                    <div class="col-md-6 col-lg-6 col-sm-12">
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
                                    <textarea id="descripcion" name="descripcion" cols="70" rows="2">
                                    </textarea>
                                    <div class="valid-feedback">
                                        Todo bien
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingrese su direccion
                                    </div>
                                </div>

                                    <!-- Button trigger modal -->
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Politicas de privacidad.
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <b>Nova</b> inmobiliaria y <b>novaexpres</b> son marcas registradas por lo que están reservadas para el uso propio y protegidas por derechos de autor, y se prohíbe la reproducción de la marca y distintivos comerciales, de forma total o parcial por cualquier usuario o personal natural o jurídica, o cualquier practica comercial que asocie nuestras marcas o distintivos comerciales y servicios técnicos o informáticos con cualquier persona natural o jurídica
                                                Cualquier reproducción total o parcial de nuestras marcas y distintivos comerciales se considerará una violación de los presentes términos y condiciones de uso pudiendo ser suspendido totalmente de nuestros servicios, portales y promoción en redes, así como ser sujeto de responsabilidades penales y civiles establecidas previas a este contrato por las leyes de El Salvador 
                                                <br><br>
                                                <b>Definiciones</b>
                                                En lo sucesivo se entenderá por nova como el proveedor de los servicios informáticos, de propiedad privada y marcas registradas destinadas a la intermediación entre clientes compradores y vendedores como de proveedores de servicios técnicos y encomiendas que de aquí en adelante será denominado novaexpress. 
                                                Se entenderá por contrato, al presente material escrito destinado a describir los términos y condiciones de la prestación de los servicios proporcionados por nova. Se entenderá por usuario al contratante del servicio sea este comprador o vendedor de un bien inmueble o solicitante de servicios de construcción, remodelación y venta de bienes raíces. Al agente inmobiliario intermediario, en lo sucesivo se le denominará como asociado, será suscriptor el solicitante de servicio de encomiendas y proveedor la persona natural o jurídica que estando asociadas nuestra marca ofrecen sus servicios posteriores a haber sido calificados por medio de nova   
                                                Tanto nova, como usuarios, suscriptores, asociados y proveedores nos suscribimos por medio del presente contrato para solventar cualquier controversia legal en cualquier materia a los tribunales de la Republica de El Salvador, Centro América específicamente a la jurisdicción de los tribunales de Santa Tecla 
                                                <br><br>
                                                <b>Aceptación de servicio y contrato </b>
                                                El uso en general de cualquiera de nuestros servicios que se tenga por iniciado de parte de nova, la suscripción y aceptación de formularios electrónicos o comunicación expresa de voluntad de nuestros usuarios, suscriptores o asociados, por medio de correspondencia, sea está escrita o electrónica se considera como una aceptación expresa de los presentes términos de prestación de servicio y contrato así como de las costos, honorarios, cargos, tarifas, precio de servicios y documentos, y por lo tanto se entenderá como expresión de aceptación de parte de la contraparte en el carácter que haya suscrito o contratado servicios de nova  
                                                Para el caso de prestación de servicios de corretaje de bienes inmuebles, la aceptación del presente contrato otorga a nova, la exclusividad de la promoción, y comercialización del inmueble por si o por terceros, así como la designación y contratación de servicios notariales por 30 días y además la propiedad intelectual de las fotografías o cualquier material audiovisual sea este de características físicas o digitales, proporcionadas por el usuario o terceros a nova para que dicha información sea publicada en nuestras plataformas, por lo que el usuario no podrá publicar por si o por terceros fotografías o promocionar los inmuebles durante la vigencia del presente contrato, el presente se prorrogara, si y solo si, el usuario expresa su voluntad por medio de correspondencia inequívoca de querer renovar el servicio con nova
                                                Los usuarios deberán proporcionar por copias simples físicas o por medios electrónicos, las escrituras del bien inmueble y documentos personales que les acrediten como propietarios del mismo, así como de carta opción venta donde estipule inequívocamente su voluntad de vender y el precio de venta del inmueble, pudiendo retractarse en cualquier momento del negocio retirando la documentación
                                                Para retirar la documentación bajo la vigencia del presente contrato y de forma anticipada, los usuarios, suscriptores o asociados deberán cancelar la cantidad de veinte dólares de los estados unidos de norte América con lo que se les devolverá completamente cualquier documentación y archivos fotográficos que pasaran a ser propiedad nuevamente de usuarios, suscriptores o asociados dando por terminado el presente contrato.
                                                Nova aceptara siempre el precio del vendedor, haciendo observaciones al mismo, apoyado en criterios técnicos propios para indicar al usuario si el precio esta ajustado al precio real de la vivienda
                                                Nova se reserva el derecho de aceptar cualquier negocio dependiendo de la condición, estado gravámenes o calidad de tenencia o riesgo social de los inmuebles a promocionar o servicios 
                                                El servicio de promoción y venta serán gratuitos para el propietario del inmueble
                                                El servicio de corretaje será completamente gratuito para los compradores no teniendo que cancelar costo alguno  
                                                El pago posterior a la venta deberá ser realizado por el usuario vendedor a más tardar 3 días posteriores a la firma de las escrituras publicas si el pago se realiza por cheque certificado, y por medio de cheque posterior a la escritura si el pago se realiza por transferencia bancaria.
                                                Al momento de formalizar el negocio y teniendo claro el precio de venta el cliente deberá firmar un pagare suscrito a favor de nova para efectos de garantizar su obligación de pago.
                                                La comisión a cobrar por nova será siempre del cinco por ciento del precio de venta, proporcionando a los clientes el respaldo necesario para hacer los procesos obligatorios en el ministerio de hacienda así como de la documentación y asesoría para realizar las respectivas deducciones fiscales.
                                                Para el caso de corredores de bienes y raíces que deseen asociarse para la venta de un inmueble, los asociados deberán proporcionar los mismos datos del propietario y realiza su registro en el formulario de la página web, aceptando además los descuentos de ley para el pago de impuestos a favor del ministerio de hacienda que son para nova de carácter obligatorio
                                                La comisión a cobrar por nova en estos casos será el cincuenta por ciento de lo obtenido de la venta, si el asociado hiciera uso de nova para hacer una segunda venta, la comisión será del cuarenta por ciento, y de la tercera vez en adelante del treinta por ciento.
                                                <br><br>
                                                Nova llevara un registro de usuarios, asociados, suscriptores y proveedores a los cuales le asignara un puntaje basado en su cumplimiento al presente contrato, la cual ira desde una bandera azul para aquellos con puntajes excelentes hasta una bandera negra para aquellos que queden expulsados de los servicios de nova 
                                                Tanto usuarios, asociados, y proveedores se comprometen a aceptar que dicho puntaje será público, así mismo como a la calificación y puntuación del mismo
                                                Aquellos usuarios, asociados, suscriptores y proveedores que ya no puedan acceder a los servicios de nova, les serán notificados los motivos de su expulsión, siendo esta notificación publica en nuestra plataforma.
                                                Información y registro
                                                El usuario deberá llenar un registro de su información que contendrá número de teléfono edad, domicilio correo electrónico y ubicación por medio de geolocalización solicitada expresamente por nova como información básica
                                                nova toma de buena fe la información de parte del usuario, siendo que para nova es un dato suficiente para la prestación del servicio 
                                                La información del usuario, suscriptor o asociado es confidencial, salvo los términos del presente contrato, y no será compartida con terceros prestadores de ninguna clase de servicios y se resguardará en bases de datos sin que ninguna persona natural o jurídica, pública o privada tenga acceso a ella, salvo solicitud de autoridad Salvadoreña en el ejercicio de sus funciones, o por el mismo usuario siempre que conste su identidad al realizar dicha solicitud y dicha información será usada únicamente en función de la solicitud del servicio contratado por usuarios, suscriptores o asociados
                                                Nova no estará autorizada para difundir ninguna información del entre usuarios, suscriptores, asociados, prestadores de servicio o destinatarios de servicios, sino la única necesaria para la encomienda, o a causa del contrato o servicio a prestar.
                                                En todo caso, nova será siempre intermediaria de los servicios, contratos o encomiendas solicitadas por usuario, suscriptor o asociado
                                                Condiciones del servicio novaexpress
                                                La membrecía da el derecho al contratante de solicitar 4 encomiendas de cualquier índole dentro del área metropolitana de san salvador, las cuales estarán cubiertas en costos operativos, dichas encomiendas podrán realizarse fuera del área metropolitana de san salvador, siempre y cuando el contratante acepte cancelar los costos extra según el caso.
                                                El contratante cancelara el costo de cualquier documento, su certificación o legalización, según el caso de lo que haya solicitado 
                                                Los servicios extra serán cancelados en su totalidad por el suscriptor 
                                                El suscriptor tendrá derecho a solicitar cualquier trámite, compra, venta, o mandato los siete días de la semana, veinte cuatro horas al día, por medio de correo electrónico o llamada telefónica realiza a nova
                                                Nova se compromete a gestionar cualquier tramite de los suscriptores 24 horas después de lo solicitado o a notificar el tiempo de cumplimiento de cualquier gestión legal o administrativa según sea el caso y los costos asociados a los mismos, así como a programar el retiro y entrega de cualquier bien o documento y la notificación al suscriptor del mismo.
                                                El costo de la membrecía será de veinte dólares de los estados unidos de América, o su equivalente

                                                <b>Penalizaciones</b>
                                                Que todo servicio se presta de buena fe, cualquier servicio que se realice se entenderá como una expresión de voluntad del usuario, suscriptor o asociado y por lo tanto se realiza bajo responsabilidad del mismo por lo que no nos hacemos responsables por cualquier violación de derechos civiles o penales, recayendo dicha responsabilidad directamente sobre el usuario, suscriptor o asociado, al mismo tiempo, expresamos nuestra voluntad de comparecer de forma personal o por mandato a cualquier tribunal de la republica y proporcionar cualquier información requerida del perfil de nuestros usuarios, suscriptores o asociados, la comunicación con los mismos y todo material informático, documental, técnico o personal que las autoridades soliciten sin reserva alguna coadyuvando con el trabajo de las autoridades para el esclarecimiento de cualquier acusación legal aun en contra de nuestros mismos clientes en casos de delitos penales. 
                                                El incumplimiento del pago o alguno de las obligaciones del presente contrato será causa suficiente para comunicar a usuarios, suscriptores o asociados de la expulsión y denegación de nuestros servicios haciendo saber los criterios técnicos de dicha decisión por medio de comunicación escrita a cualquier medio electrónico o por documento físico.
                                                <br><br>
                                                El presente contrato es propiedad intelectual del propietario de nova
                                                <br><br>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="miCheckbox" required>
                                                    <label class="form-check-label" for="miCheckbox">Acepto los términos y condiciones</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <button class="btn btn-primary" >Enviar formulario</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#Extranjero-movil" data-bs-toggle="modal">Regresar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade mt-5" id="modalCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 ">
                        <div class="container">
                            <span class="text-disp">
                                Nova <span class="under">Express!</span>
                            </span>
                            <br>
                            <br>
                            <div>
                                <p class="font-rowdies-scalable bgNative color-white p-4 extras brd-right font-primary">
                                Novaexpress no es un servicio de mensajería, somos tu asistente personal en El Salvador, pendientes 24/7 de cualquier necesidad que tengas!
                                <br>
                                <br>
                                Cubrimos todas tus necesidades cuando lo quieres, como lo quieres y por un precio justo 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <div class="container">
                            <span class="font-rowdies-scalable">
                                Por medio de la suscripción a Novaexpress tendrás la facilidad de hacerte cargo de esos tramites que por estar lejos te resultan complicados
                                <br>
                                <br>
                                Al suscribirte podrás:
                            </span>
                            <ul class="fa-ul font-rowdies-scalable">
                                <li><span class="fa-li"><i class="fa fa-money" aria-hidden="true"></i></span>Paga impuestos municipales</li>
                                <li><span class="fa-li"><i class="fa fa-building" aria-hidden="true"></i></span>Contratar servicios</li>
                                <li><span class="fa-li"><i class="fa fa-car" aria-hidden="true"></i></span>Cotizar bienes como vehículos</li>
                                <li><span class="fa-li"><i class="fa fa-hotel" aria-hidden="true"></i></span>Administrar tus propiedades </li>
                                <li><span class="fa-li"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></span>Realizar cualquier tramite administrativo en oficinas de gobierno o privadas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="font-rowdies-scalable">Pero además podrás estar al cuidado de tus seres queridos con la confianza de un servicio honesto y transparente</p>
                        <p class="font-rowdies-scalable">Pagamos colegiaturas y mensualidades por ti, en cualquier institución enviándote además la información que pidas en el momento que la necesitas, asi, podrás estar al tanto de tus seres queridos desde la distancia y ver que aprovechan al máximo tu esfuerzo.</p>
                    </div>
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
                <span class="font-normal">Nova inmobiliaria es un clúster de profesionales con larga trayectoria en el sector de viviendas, 
                    compuesto por constructores, corredores de bienes raíces, peritos expertos, abogados notarios y contadores
                     reunidos con el objetivo de cambiar el servicio de bienes y raíces en El Salvador, proveyendo a nuestros 
                     clientes de nuestra experiencia, bases legales y criterios técnicos en la intermediación de sus negocios 
                     inmobiliarios. </span>
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


<div class="stacked-cards mt-5 cards-pc">
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



<div class="container cards-movil">

    <div class="row">

        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview " data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100 border-0">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body background-color-native">
                        <h5 class="card-title">Servicio de corretaje</h5>
                        <p class="card-text">Ofrecemos servicios de remodelación y construcción para su vivienda.</p>
                        <button type="button" class="btn btn-dark "><a href="/corretajes/create"
                                class="text-light text-decoration-none">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview " data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100 border-0">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body background-color-native">
                        <h5 class="card-title">Remodelaciones y construcciones</h5>
                        <p class="card-text">Ofrecemos servicios de remodelación y construcción para su vivienda solo
                            deverás rellenar
                            un pequeño formulario acontinuación.
                        </p>
                        <button type="button" class="btn btn-dark"><a href="/remodelaciones/create"
                                class="text-light text-decoration-none">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center mt-5 scale aniview" data-av-animation="slideInUp">
                <div class="card d-flex flex-row align-items-center overflow-hidden w-100 border-0">
                    <div class="figure">
                        <div class="circle-lg"></div>
                    </div>
                    <div class="card-body background-color-native">
                        <h5 class="card-title">Servicios extra</h5>
                        Realizamos servicios de:
                            <ul class="">
                                Valuos, Mediciones
                                <br>
                                Remediciones,
                                Lotificaciones
                            </ul>
                        </p>
                        <button type="button" class="btn btn-dark " id="viviendas"><a href="/corretaje"
                                class="text-light text-decoration-none">Acceder al servicio</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- Inicio de servicios -->
<div class="row mt-5">
    <div class="col-sm-12">
        <h1 class="text-center font-rowdies" id="viviendas">Viviendas</h1>
    </div>
</div>


<div class="viviendas position-relative d-flex flex-wrap" >
    <div class="shape2">
        <img src="/Img/Barras izq 2.png" alt="" class="img-fluid">
    </div>
    <div class="row d-flex justify-content-center w-100">
        @foreach ($viviendas as $vivienda)
        <div class="col-md-4 col-sm-12">
            <div class="profile-card-4 text-center aniview contimg" data-av-animation="pulse"><img class="imgResize" src="{{$vivienda->imagen}}">
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
            if ($('#Extranjero-movil').is(':visible')) {
                $('#Extranjero-movil').modal('toggle');
                $('body').removeAttr('style');
            }
            if ($('#Extranjero').is(':visible')) {
                $('#Extranjero').modal('toggle');
            }
        })
    </script>

<script>
    $(document).ready(function() {
        $('#terminos').submit(function(event) {
            var checkbox = $('#miCheckbox');
            if (!checkbox.is(':checked')) {
            event.preventDefault();
            alert('Debes aceptar los términos y condiciones.');
            }
        });
    });

    
  </script>
    
    @endsection