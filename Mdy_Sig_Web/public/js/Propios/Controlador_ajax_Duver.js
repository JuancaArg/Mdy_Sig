
var ruta = "http://localhost/mdy_sig/mdy_sig_web/public/";

//Buscar Datos

$('#Contenido_VA_Btn_Buscar_Documento').click(function () {

    //Extrae informacion

    Documento = $('#Contenido_VA_Documento').val();
    Fecha = $('#Contenido_VA_Fecha').val();

    $(Contenido_VA_Nombre).val('');
    $(Contenido_VA_Paterno).val('');
    $(Contenido_VA_SubCampaña).val('');
    $(Contenido_VA_Sigla).val('');
    $(Contenido_VA_Descripcion).val('');
    $(Contenido_VA_Hora_Ingreso).val('');
    $(Contenido_VA_Hora_Programado).val('');

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
                if (Dias < 1 || Dias > 3) {

                    swal.fire('Mensaje del sistema', 'FECHA fuera del rango permitido (3 dias máxima de antiguedad)', 'error')

                } else {

                    $(Contenido_VA_Nombre).val(resultado[0]["NOMBRES"]);
                    $(Contenido_VA_Paterno).val(resultado[0]["AP_PATERNO"] + ' ' + resultado[0]["AP_MATERNO"]);
                    $(Contenido_VA_SubCampaña).val(resultado[0]["SUB_CAMPANIA"]);
                    $(Contenido_VA_Sigla).val(resultado[0]["SIGLA_ASISTENCIA"]);
                    $(Contenido_VA_Descripcion).val(resultado[0]["DESCRIPCION_SIGLA"]);
                    $(Contenido_VA_Hora_Ingreso).val(resultado[0]["INGRESO_REAL"]);
                    $(Contenido_VA_Hora_Programado).val(resultado[0]["HORARIO_PROGRAMADO"]);

                }
            }
        }
    });


});


var siglas = ['Validación de Asistencia', 'Validación de Tardanza','Anulación de Conexión']
var motivo_A = ['Seleccionar Motivo','FALLO EN EL PROCESO DE ALTA DE PERSONAL', 'FALLO DE OMISION DE PERSONAL', 'FALLO DE REGISTRO EN SISTEMA', 'RETRASO DEL PROCESO DE CRECIMIENTO', 'FALTA DE ACTUALIZACIÓN DEL CARGO FUNCIONAL']
var motivo_Tardanza = ['Seleccionar Motivo','FALLO EN PC, MARCACIÓN TARDÍA (ACTUALIZACIÓN DE TARDANZA)']
var motivo_FI = ['Seleccionar Motivo','ERROR DE MARCACIÓN']

for (let index = 0; index < siglas.length; index++) {
    opciones = '<option>' + siglas[index] + '</option>';
    $('#Contenido_VA_Lista_Sigla').append(opciones);
};

// Cargar motivo de acuerdo a la sigla solicitada

$('#Contenido_VA_Lista_Sigla').on('change', function () {

    //var opciones_motivo = null
    $('#Contenido_VA_Lista_Motivo').empty();

    if ($(this).val() == 'Validación de Asistencia') {
        
        for (let index = 0; index < motivo_A.length; index++) {
            opciones_motivo = '<option>' + motivo_A[index] + '</option>';
            $('#Contenido_VA_Lista_Motivo').append(opciones_motivo);
        };
        $('#Contenido_VA_Hora_Ingreso_mod').attr('disabled', 'disabled');

    } else if ($(this).val() == 'Validación de Tardanza') {

        for (let index = 0; index < motivo_Tardanza.length; index++) {
            opciones_motivo = '<option>' + motivo_Tardanza[index] + '</option>';
            $('#Contenido_VA_Lista_Motivo').append(opciones_motivo);
        };

        $('#Contenido_VA_Hora_Ingreso_mod').removeAttr('disabled');

    } else if ($(this).val() == 'Anulación de Conexión') {

        for (let index = 0; index < motivo_FI.length; index++) {
            opciones_motivo = '<option>' + motivo_FI[index] + '</option>';
            $('#Contenido_VA_Lista_Motivo').append(opciones_motivo);
        };

        $('#Contenido_VA_Hora_Ingreso_mod').attr('disabled', 'disabled');
    }

})


//Guardar

$('#btn-sol-val-asistencia').click(function () {

    var tabla = $('#Contenido_VA_Formulario').serialize();
    var databla = parseQueryString(tabla);

    let DatoCompleto = 1;

    if (databla['Contenido_VA_Documento'] == ''
        || databla['Contenido_VA_Lista_Sigla'] == 'Seleccionar Sigla'
        || databla['Contenido_VA_Lista_Motivo'] == 'Seleccionar Motivo') {

        DatoCompleto = 0;

    }

    console.log(DatoCompleto);

    console.log(databla);

    if (DatoCompleto == 1) {

        if ($('#Contenido_VA_Sigla').val() != databla['Contenido_VA_Lista_Sigla']) {
            if($('#Contenido_VA_Sigla').val() != ''){

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
                                data: { Controlador: 'Contenido_VA_Registrar', tabla: tabla },
                                beforeSend: function (res) {

                                    console.log("Cargando");
                                },
                                success: function (res) {

                                }
                            })
                        }
                    })
            }else{
                swal.fire('Mensaje del sistema', 'Realizar la busqueda correspondiente', 'warning')
            }
        }else{
            swal.fire('Mensaje del sistema', 'Validar la sigla Solicitada', 'warning')    
        }
    }
    else {
        swal.fire('Mensaje del sistema', 'Porfavor complete todos los campos', 'warning')
    }

});