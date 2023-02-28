
var ruta = "http://localhost/mdy_sig/mdy_sig_web/public/";

$('#Contenido_VA_Btn_Buscar_Documento').click(function () {

    //Extrae informacion

    Documento = $('#Contenido_VA_Documento').val();
    //Fecha = $('#Contenido_VA_Fecha').val();


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
        data: { Controlador: 'Busca_Agente_Asistencia', Documento: Documento }
        , beforeSend: function (res) {

            console.log("Cargando");

        }, success: function (res) {

            resultado = JSON.parse(res);

            if (resultado.length == 0) {

                swal.fire('Mensaje del sistema', 'Ingresar datos correctos', 'error')

            } else {

                $(Contenido_VA_Nombre).val(resultado[0]["NOMBRES"]);
                $(Contenido_VA_Paterno).val(resultado[0]["AP_PATERNO"]);
                $(Contenido_VA_Materno).val(resultado[0]["AP_MATERNO"]);
                $(Contenido_VA_SubCampaña).val(resultado[0]["SUB_CAMPANIA"]);
                $(Contenido_VA_Sigla).val(resultado[0]["SIGLA_ASISTENCIA"]);
                $(Contenido_VA_Descripcion).val(resultado[0]["DESCRIPCION_SIGLA"]);

            }

        }
    });

});