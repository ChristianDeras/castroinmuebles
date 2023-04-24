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
            <form class="row g-3 needs-validation p-3 border rounded-2 bg-white" action="/remodelaciones" method="POST"
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
                <div class="col-4">
                    <label for="tel" class="form-label">Departamento:</label>
                    <input type="text" id="departamento" name="departamento" class="form-control" required>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su departamento.
                    </div>
                </div>
                <div class="col-4">
                    <label for="tel" class="form-label">Municipio:</label>
                    <input type="text" id="departamento" name="municipio" class="form-control" required>
                    <div class="valid-feedback">
                        Todo bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor ingrese su municipio.
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mt-3 mb-3 mt-2 btn-color">Enviar</button>
            </form>
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
@endsection