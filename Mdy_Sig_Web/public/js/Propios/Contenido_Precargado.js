// Completa con DS los select

for (let index = 0; index < dias.length; index++) {

    $('#Contenido_CH_' + dias[index] + '_Salida').append('<option>DS</option>');
    $('#Contenido_CH_' + dias[index] + '_Entrada').append('<option>DS</option>');

}

// Carga los intervalos a los select

for (let index = 0; index < intervalos.length; index++) {

    opciones = '<option>' + intervalos[index] + '</option>';

    for (let index = 0; index < dias.length; index++) {

        $('#Contenido_CH_' + dias[index] + '_Salida').append(opciones);
        $('#Contenido_CH_' + dias[index] + '_Entrada').append(opciones);

    }
}


