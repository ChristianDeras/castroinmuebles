@extends('layouts.header')

@section('contenidoPrincipal')
<div class="container">
    <div class="col-12 mb-3 text-center mt-5">
        <h2>Por favor rellene el siguiente formulario</h2>
    </div>
    <div class="row mt-5 d-flex align-items-center justify-content-center position-relative ">
        <div class="circulo">

        </div>
        <div class="col-md-6 col-sm-12">
            <form class="row g-3 needs-validation p-3 border rounded-2 bg-white" id="remodelacion" action="/remodelaciones" method="POST"
                novalidate>
                @csrf
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

                <div class="col-8">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="mail" id="correo" name="correo" class="form-control" required>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su correo.
                    </div>
                </div>
                <div class="col-4">
                    <label for="tel" class="form-label">Teléfono:</label>
                    <input type="text" id="tel" name="telefono" class="form-control" required>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su Celular.
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inline1" value="Remodelacion" name="tipo"
                            required>
                        <label class="form-check-label" for="inline1">Remodelacion</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inline2" name="tipo" value="nueva" required>
                        <label class="form-check-label" for="inline2">Construccion nueva</label>
                    </div>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor seleccione una opción.
                    </div>
                </div>
                <div class="col-4">
                    <label for="money" class="form-label">Presupuesto:</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" id="presupuesto" name="presupuesto"
                            aria-label="Amount (to the nearest dollar)" required>
                        <div class="valid-feedback">
                            Todo bien
                        </div>
                        <div class="invalid-feedback">
                            Por favor pon un rango valido.
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <label for="tel" class="form-label">Departamento:</label>

                    <select id="departamentos-select" name="departamento" class="form-select" required>
                        <option value="">Selecciona un departamento</option>
                        </select>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su departamento.
                    </div>
                </div>
                <div class="col-8">
                    <label for="tel" class="form-label">Municipio:</label>
                    <select id="atributos-select" class="form-select" name="municipio" required disabled>
                        <option value="">Selecciona un departamento primero</option>
                    </select>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su municipio.
                    </div>
                </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#terminos">
                Aceptar terminos y condiciones.
                </button>

                <!-- Modal terminos y condiciones -->
                <div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Terminos y condiciones</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-color">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
        </div>

    </div>
</div>
<div class="row">
    <div class="container">
        <div class="col-12 text-center">
            <a href="/#servicios" class="btn btn-success">Regresar</a>
        </div>
    </div>
  </div>
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
    $(document).ready(function() {
        $('#remodelacion').submit(function(event) {
            var checkbox = $('#miCheckbox');
            if (!checkbox.is(':checked')) {
            event.preventDefault();
            alert('Debes aceptar los términos y condiciones.');
            }
        });
    });
  </script>

<script>
        var departamentoSelect = document.getElementById('departamentos-select');
        var atributosSelect = document.getElementById('atributos-select');

        departamentoSelect.addEventListener('change', function() {
        var seleccionado = departamentoSelect.value;

        if (seleccionado) {
            fetch('../js/departamentos.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                var atributosDepartamento = data[seleccionado];

                atributosSelect.innerHTML = '';
                for (var i = 0; i < atributosDepartamento.length; i++) {
                var opcion = document.createElement('option');
                opcion.value = atributosDepartamento[i];
                opcion.textContent = atributosDepartamento[i];
                atributosSelect.appendChild(opcion);
                }

                atributosSelect.disabled = false;
            })
            .catch(function(error) {
                console.log('Error al cargar los atributos:', error);
            });
        } else {
            atributosSelect.disabled = true;
            atributosSelect.innerHTML = '<option value="">Selecciona un departamento primero</option>';
        }
        });
</script>

<script>
    var departamentosSelect = document.getElementById('departamentos-select');
    var departamentos = [
    'Ahuachapán',
    'Cabañas',
    'Chalatenango',
    'Cuscatlán',
    'La Libertad',
    'La Paz',
    'La Unión',
    'Morazán',
    'San Miguel',
    'San Salvador',
    'San Vicente',
    'Santa Ana',
    'Sonsonate',
    'Usulután'
    ];

    for (var i = 0; i < departamentos.length; i++) {
    var opcion = document.createElement('option');
    opcion.value = departamentos[i];
    opcion.textContent = departamentos[i];
    departamentosSelect.appendChild(opcion);
    }
</script>
@endsection