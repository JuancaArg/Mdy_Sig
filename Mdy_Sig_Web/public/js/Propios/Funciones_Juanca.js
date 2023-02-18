// Desactivar el cambpo del costado si se selecciona DS

$(camposdiasview.slice(0, -1)).on('click', function () {

    // Nombre del Elemento Salida
    if ($(this).val() == 'DS') {

        idcampo = this.id.replace('Entrada', 'Salida');

        $('#' + idcampo + '').attr('disabled', 'disabled');

        $('#' + idcampo + '').val('DS')

    }

})

// Desactivar el cambpo fecha fin cuando es permanente 

$('#Contenido_CH_Tipo_Cambio').on('change', function () {

    if ($(this).val() == "Permanente") {
        $('#Contenido_CH_Fecha_Fin').attr('disabled', 'disabled');
        $('#Contenido_CH_Fecha_Fin').val('');
    } else {
        $('#Contenido_CH_Fecha_Fin').removeAttr('disabled');
    }

});

// Envia alerta si esta seleccionando un dia lunees

$('#Contenido_CH_Fecha_Inicio').on('change',function(){

    let valor = new Date($(this).val());
    let iddia = valor.getDay();
    let nombredia = dias[iddia];

    if (nombredia != 'Lunes'){

        swal.fire('Mensaje del sistema','Ojo! El dia seleccionado no es un lunes, es probable que se asigne un doble descanso','warning')

    }


})