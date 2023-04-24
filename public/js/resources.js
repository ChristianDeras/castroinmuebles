$('#nacionalidad').on('change', function() {
    var opcionSeleccionada = this.value;

    if (opcionSeleccionada =="Nacional") {
        if ($('#calificacion').length > 0 && $('#descuento').length > 0 && $('#salarios').length > 0) {
            $('#calificacion').remove();
            $('#descuento').remove();
            $('#salarios').remove();
        }else{
            $('#contenedor').append('<div class="col-12" id="calificacion">'+
        '<label for="residendica" class="form-label">Calificacion crediticia:</label>'+
        '<select name="calificacion" id="calificacion" class="form-control" required>'+
            '<option value="">Seleccionar...</option>'+
            '<option value="A" >A</option>'+
            '<option value="B" >B</option>'+
            '<option value="C" >C</option>'+
            '<option value="D" >D</option>'+
        '</select>'+
        '<div class="valid-feedback">'+
            'Todo bien'+
        '</div>'+
        '<div class="invalid-feedback">'+
            'Por favor ingrese su calificacion'+
        '</div>'+
'</div>'+
'<div class="col-12" id="descuento">'+
        '<label for="residendica" class="form-label">¿Le aplican descuento de ley?</label>'+
        '<select name="descuento" id="calificacion" class="form-control" required>'+
            '<option value="">Seleccionar...</option>'+
            '<option value="Si" >Si</option>'+
            '<option value="No" >No</option>'+
        '</select>'+
        '<div class="valid-feedback">'+
            'Todo bien'+
        '</div>'+
        '<div class="invalid-feedback">'+
            'Por favor ingrese su respuesta'+
        '</div>'+
'</div>'+
'<div class="col-12" id="salarios">'+
                    '<label for="salarios" class="form-label">Cantidad de salarios :</label>'+
                    '<input type="number" id="salarios" name="salarios" class="form-control" required>'+
                    '<div class="valid-feedback">'+
                        'Todo bien'+
                    '</div>'+
                    '<div class="invalid-feedback">'+
                        'Por favor ingrese sus detalles de salario'+
                    '</div>'+
            '</div>'


);
        }
        
    }else {
        if ($('#calificacion').length > 0 && $('#descuento').length > 0 && $('#salarios').length > 0) {
            $('#calificacion').remove();
            $('#descuento').remove();
            $('#salarios').remove();
        }
    }
  });