
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
        data: { Controlador: 'Busca_Agente_Asistencia', Documento: Documento , Fecha: Fecha}
        , beforeSend: function (res) {

            f = new Date();
            xy = new Date(Fecha)

            dif = (f- xy);
            Dias = Math.floor(dif / (1000 * 60 * 60 * 24));

            console.log("Cargando");

        }, success: function (res) {

            resultado = JSON.parse(res);

            if (resultado.length == 0) {

                swal.fire('Mensaje del sistema', 'Ingresar datos correctos', 'error')

            } else {
                if (Dias < 1 || Dias > 20) {

                    swal.fire('Mensaje del sistema', 'FECHA fuera del rango permitido', 'error')

                }else{

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
var motivo_VA_A = ['FALLO EN EL PROCESO DE ALTA DE PERSONAL','FALLO DE OMISION DE PERSONAL','FALLO DE REGISTRO EN SISTEMA','RETRASO DEL PROCESO DE CRECIMIENTO','FALTA DE ACTUALIZACIÓN DEL CARGO FUNCIONAL','FALLO EN PC, MARCACIÓN TARDÍA (ACTUALIZACIÓN DE TARDANZA)']

for (let index = 0; index < siglas.length; index++) {
    opciones = '<option>' + siglas[index] + '</option>';
    $('#Contenido_VA_Lista_Sigla').append(opciones);
};

for (let index = 0; index < motivo_VA_A.length; index++) {
    opciones_VA_A = '<option>' + motivo_VA_A[index] + '</option>';
    $('#Contenido_VA_Lista_Motivo').append(opciones_VA_A);
};