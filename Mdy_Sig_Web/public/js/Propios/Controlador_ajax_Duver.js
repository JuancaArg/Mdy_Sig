
var ruta = "http://localhost/mdy_sig/mdy_sig_web/public/";

$('#Contenido_VA_Btn_Buscar_Documento').click(function () {

    //Extrae informacion

    Documento = $('#Contenido_VA_Documento').val();
    Fecha = $('#Contenido_VA_Fecha').val();

    $(Contenido_VA_Nombre).val('');
    $(Contenido_VA_Paterno).val('');
    $(Contenido_VA_Materno).val('');
    $(Contenido_VA_SubCampaña).val('');
    $(Contenido_VA_Sigla).val('');
    $(Contenido_VA_Descripcion).val('');

    $.ajax({
        url: ruta + 'Controlador_Funciones_Ajax',
        type: 'get',
        async: true,
        data: { Controlador: 'Busca_Agente_Asistencia', Documento: Documento, Fecha: Fecha }
        , beforeSend: function (res) {

            f = new Date();
            xy = new Date(Fecha)

            dif = (f - xy);
            Dias = Math.floor(dif / (1000 * 60 * 60 * 24));

            console.log("Busqueda de DOC");

        }, success: function (res) {

            resultado = JSON.parse(res);

            if (resultado.length == 0) {

                swal.fire('Mensaje del sistema', 'Ingresar datos correctos', 'error')

            } else {
                if (Dias < 1 || Dias > 20) {

                    swal.fire('Mensaje del sistema', 'FECHA fuera del rango permitido', 'error')

                } else {

                    $(Contenido_VA_Nombre).val(resultado[0]["NOMBRES"]);
                    $(Contenido_VA_Paterno).val(resultado[0]["AP_PATERNO"]);
                    $(Contenido_VA_Materno).val(resultado[0]["AP_MATERNO"]);
                    $(Contenido_VA_SubCampaña).val(resultado[0]["SUB_CAMPANIA"]);
                    $(Contenido_VA_Sigla).val(resultado[0]["SIGLA_ASISTENCIA"]);
                    $(Contenido_VA_Descripcion).val(resultado[0]["DESCRIPCION_SIGLA"]);

                }
            }
        }
    });


});


var siglas = ['A', 'FI']
var motivo = ['FALLO EN EL PROCESO DE ALTA DE PERSONAL', 'FALLO DE OMISION DE PERSONAL', 'FALLO DE REGISTRO EN SISTEMA', 'RETRASO DEL PROCESO DE CRECIMIENTO', 'FALTA DE ACTUALIZACIÓN DEL CARGO FUNCIONAL', 'FALLO EN PC, MARCACIÓN TARDÍA (ACTUALIZACIÓN DE TARDANZA)']

for (let index = 0; index < siglas.length; index++) {
    opciones = '<option>' + siglas[index] + '</option>';
    $('#Contenido_VA_Lista_Sigla').append(opciones);
};

for (let index = 0; index < motivo.length; index++) {
    opciones_1 = '<option>' + motivo[index] + '</option>';
    $('#Contenido_VA_Lista_Motivo').append(opciones_1);
};

$('#btn-sol-val-asistencia').click(function () {

    var tabla = $('#Contenido_VA_Formulario').serialize();
    var databla = parseQueryString(tabla);

    let DatoCompleto = 1;

    if (databla['Contenido_VA_Documento'] == ''
        && databla['Contenido_VA_Lista_Sigla'] == 'Seleccionar sigla'
        && databla['Contenido_VA_Lista_Motivo'] == 'Seleccionar motivo') {

        DatoCompleto = 0;

    }

    console.log(databla);

    if (DatoCompleto == 1) {

        Swal.fire(
            {
                title: 'Mensaje del sistema',
                text: "Usted esta registrando cambio de Sigla?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonText: 'Si, Confirmar'
            }).then((result) => {

                if (result.isConfirmed) {
                    $.ajax({
                        url: ruta + 'Controlador_Funciones_Ajax',
                        type: 'get',
                        async: true,
                        //data: { Controlador: 'Contenido_CH_Registrar', tabla: tabla },
                        beforeSend: function (res) {

                            console.log("Cargando");
                        },
                        success: function (res) {

                        }
                    })
                }
            })

    }
    else {

        swal.fire('Mensaje del sistema', 'Porfavor complete todos los campos', 'warning')

    }

});