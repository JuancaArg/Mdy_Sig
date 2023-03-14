
var dias = [
    'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
]

// Variable Intervalos 30 minutes

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


// Variable Intervalos 15 minutes

var intervalos15min = []

for (let index = 0; index <= 23; index++) {
    if (index < 10) {

        inter = ("0" + index);
        intervalos15min.push(inter + ":00");
        intervalos15min.push(inter + ":15");
        intervalos15min.push(inter + ":30");
        intervalos15min.push(inter + ":45");

    } else {

        inter = (index.toString());
        intervalos15min.push(inter + ":00");
        intervalos15min.push(inter + ":15");
        intervalos15min.push(inter + ":30");
        intervalos15min.push(inter + ":45");

    }

}

// Variable de id de selecciones

var camposdiasview = "";

for (let index = 0; index < dias.length; index++) {

    const element = '#Contenido_CH_' + dias[index] + '_Entrada,';

    camposdiasview += element;

}

