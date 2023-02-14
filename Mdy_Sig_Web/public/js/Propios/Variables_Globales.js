
var dias = [
    'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
]

// Variable Intervalos

var intervalos = []

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
// Variable de id de selecciones

var camposdiasview = "";

for (let index = 0; index < dias.length; index++) {

    const element = '#Contenido_CH_' + dias[index] + '_Entrada,';

    camposdiasview += element;

}

