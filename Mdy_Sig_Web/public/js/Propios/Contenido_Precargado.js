// Completa con DS los select

for (let index = 0; index < dias.length; index++) {

    $('#Contenido_CH_' + dias[index] + '_Salida').append('<option>DS</option>');
    $('#Contenido_CH_' + dias[index] + '_Entrada').append('<option>DS</option>');

}

// Carga los intervalos a los select

$('#Contenido_CH_Hora_Defecto_Entrada').append('<option>DS</option>');
$('#Contenido_CH_Hora_Defecto_Salida').append('<option>DS</option>');


$('#Contenido_CH_Hora_Break_Entrada').append('<option>Sin Break</option>');
$('#Contenido_CH_Hora_Break_Salida').append('<option>Sin Break</option>');


for (let index = 0; index < intervalos.length; index++) {

    opciones = '<option>' + intervalos[index] + '</option>';

    for (let index = 0; index < dias.length; index++) {

        $('#Contenido_CH_' + dias[index] + '_Salida').append(opciones);
        $('#Contenido_CH_' + dias[index] + '_Entrada').append(opciones);

    }

    $('#Contenido_CH_Hora_Defecto_Entrada').append(opciones);
    $('#Contenido_CH_Hora_Defecto_Salida').append(opciones);


    $('#Contenido_CH_Hora_Break_Entrada').append(opciones);
    $('#Contenido_CH_Hora_Break_Salida').append(opciones);


}

// convierte datos de una tabla en objeto

function parseQueryString(queryString) {
    var params = {}, queries, temp, i, l;
  
    // Divide la cadena de consulta en una matriz de claves y valores
    queries = queryString.split("&");
  
    // Convierte la matriz de claves y valores en un objeto
    for (i = 0, l = queries.length; i < l; i++) {
      temp = queries[i].split('=');
      params[temp[0]] = decodeURIComponent(temp[1]);
    }
  
    return params;
  }


