window.onload = function () {

    // Dias Semana

    var dias = [
        'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'
    ]    

    // Intervalos para formulario

        var intervalos = [];

        for (let index = 0; index < dias.length; index++) {

            $('#Contenido_CH_'+dias[index]+'_Salida').append('<option>DS</option>');
            $('#Contenido_CH_'+dias[index]+'_Entrada').append('<option>DS</option>');
       
        }
        for (let index = 0; index <= 23; index++) {
            if (index < 10) {

                inter = ("0" + index);
                intervalos.push(inter + ":00");
                intervalos.push(inter + ":30");

            } else {

                inter = (index.toString());
                intervalos.push(inter + ":00");
                intervalos.push(inter + ":30");

            }

        }

        for (let index = 0; index < intervalos.length; index++) {

            opciones = '<option>'+intervalos[index]+'</option>';

            for (let index = 0; index < dias.length; index++) {
            
                $('#Contenido_CH_'+dias[index]+'_Salida').append(opciones);
                $('#Contenido_CH_'+dias[index]+'_Entrada').append(opciones);                    

            }
        }
}