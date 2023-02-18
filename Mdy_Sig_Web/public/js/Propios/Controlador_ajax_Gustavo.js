window.onload = Resumen_Asistencia();

function Resumen_Asistencia ()
{
    $.ajax({
    url: ruta + 'Controlador_Funciones_Ajax',
    type:'GET',
    async: true,
    data: {Controlador:'Resumen_Asistencia'},
    beforeSend: function(res){

    },
    success: function(res){
        
        var Resultado = JSON.parse(res);
        for (let index = 0; index < Resultado.length; index++) {
        
        Campos = `
        <tr>
            <td> ${Resultado[index].FECHA_HORARIO}</td>
            <td> ${Resultado[index].HORARIO_PROGRAMADO}</td>
            <td> ${Resultado[index].DESCANSOS}</td>
            <td name=${Resultado[index].SIGLA_ASISTENCIA}> ${Resultado[index].SIGLA_ASISTENCIA}</td>
            <td> ${Resultado[index].DESCRIPCION_SIGLA}</td>
            <td> ${Resultado[index].INGRESO}</td>
            <td name=${Resultado[index].TARDANZA_FLAG}> ${Resultado[index].TARDANZA}</td>
        </tr>
        `
        $('#Tabla_Asistencia').append(Campos);
        }

        $('Tabla_Asistencia').ready(function(){
        $('[name="FI"]').addClass("badge badge-danger");
        $('[name="A"]').addClass("badge badge-success");
        $('[name="DS"]').addClass("badge badge-info");
        
        $('[name="1"]').addClass("text-danger typcn typcn-arrow-down-thick");
        
        }
        );

    }
    })
}