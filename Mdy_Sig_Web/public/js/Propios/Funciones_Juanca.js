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

$('#Contenido_CH_Fecha_Inicio').on('change', function () {

    let valor = new Date($(this).val());
    let iddia = valor.getDay();
    let nombredia = dias[iddia];

    if (nombredia != 'Lunes') {

        swal.fire('Mensaje del sistema', 'Ojo! El dia seleccionado no es un lunes, es probable que se asigne un doble descanso', 'warning')

    }


})

// Pone un horario por defecto

$('#Contenido_CH_Hora_Defecto_Entrada').on('change', function () {

    for (let index = 0; index < dias.length; index++) {

        $('#Contenido_CH_' + dias[index] + '_Entrada').val($(this).val())
    }

})

$('#Contenido_CH_Hora_Defecto_Salida').on('change', function () {

    for (let index = 0; index < dias.length; index++) {

        $('#Contenido_CH_' + dias[index] + '_Salida').val($(this).val())
    }

})

$('#Contenido_CH_Hora_Break_Entrada').on('change', function () {

    // Actualiza contenido de la break fin por dias

        // Obtiene break por semana FT = 60 min diario PT = 15 min Semanales

        let cambiomalla_condicion = $('#Contenido_CH_Condicion').val();

        console.log(cambiomalla_condicion)

        if (cambiomalla_condicion == '') {

            swal.fire('Mensaje del sistema', 'No a seleccion ningun personal', 'warning')

        }

        else {

            let horasbreak = 0

            if (cambiomalla_condicion == 'PART TIME') {
                
                horasbreak = 15

            }else{

                horasbreak = 60

            }

            // Replica en valor de break por defecto

            let horafinal = $(this).val().substr(0,3)+""+(parseInt($(this).val().substr(3,2)) + parseInt(horasbreak));

            console.log(horafinal);
            console.log(horafinal.substr(3,2));
        
            for (let index = 0; index < dias.length; index++) {

                $('#Contenido_CH_Hora_Break_' + dias[index] + '_Entrada').val($(this).val());                
                
                if (horafinal.substr(3,2) == 60) {
                    
                    console.log('siguiente hora');

                } else {
                 
                    $('#Contenido_CH_Hora_Break_' + dias[index] + '_Salida').val(horafinal);

                }        

            }



        }   
})

$('#Contenido_CH_Hora_Break_Salida').on('change', function () {

    for (let index = 0; index < dias.length; index++) {

        $('#Contenido_CH_Hora_Break_' + dias[index] + '_Salida').val($(this).val())

    }

})

