
var ruta = "http://localhost/mdy_sig/mdy_sig_web/public/";

$('#login_button_inicia_sesion').click(function () {

  var v_documento = $('#login_dni').val();
  var v_pass = $('#login_pass').val();

  $.ajax({

    url: ruta + 'Controlador_Funciones_Ajax',
    type: 'get',
    async: true,
    data: { Controlador: 'Login_inicio_sesion', Documento: v_documento, Pass: v_pass }
    , beforeSend: function () {

      console.log(v_documento + ' ' + v_pass);

    }

    , success: function (res) {

      console.log(res);

      if (res.substring(0, 7) == 'ingreso') {

        Swal.fire('Mensaje', res, 'success');

        Swal.fire({
          title: 'Mensaje del sistemas',
          text: res,
          icon: 'success',
          confirmButtonColor: '#48AD22',
          confirmButtonText: 'Aceptar'
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        })


      } else {

        Swal.fire('Mensaje', 'Usuario desactivo o credenciales incorrectas', 'error')

      }

    }

  });

})

$('#Contenido_CH_Btn_Buscar_Documento').click(function () {

  //Extrae informacion

  Documento = $('#Contenido_CH_Documento').val();


  $(Contenido_CH_Nombre).val('');
  $(Contenido_CH_Condicion).val('');
  $(Contenido_CH_Campaña).val('');
  $(Contenido_CH_Jefe1).val('');
  $(Contenido_CH_Jefe2).val('');
  $(Contenido_CH_SubCampaña).val('');

  $.ajax({
    url: ruta + 'Controlador_Funciones_Ajax',
    type: 'get',
    async: true,
    data: { Controlador: 'Busca_Agente', Documento: Documento }
    , beforeSend: function (res) {

      console.log("Cargando");

    }, success: function (res) {

      resultado = JSON.parse(res);

      if (resultado.length == 0) {

        swal.fire('Mensaje del sistema', 'Personal no existe', 'error')

      } else {

        $(Contenido_CH_Nombre).val(resultado[0]["NOMBRES"]);
        $(Contenido_CH_Campaña).val(resultado[0]["CAMPANIA"]);
        $(Contenido_CH_Condicion).val(resultado[0]["CONDICION_LABORAL"]);
        $(Contenido_CH_Jefe1).val(resultado[0]["NOM_SUPERIOR_INMEDIATO_01"]);
        $(Contenido_CH_Jefe2).val(resultado[0]["NOM_SUPERIOR_INMEDIATO_02"]);
        $(Contenido_CH_SubCampaña).val(resultado[0]["SUB_CAMPANIA"]);


      }

    }
  });

});

$('#btn-sol-cambio-horario').click(function (e) {

  // Extract data form table

  var tabla = $('#Contenido_CH_Formulario').serialize();

  var databla = parseQueryString(tabla);

  // Calcula Horas por cada fecha 

  let Totalhora = 0;
  let TotalNollenado = 0;

  if (databla['Contenido_CH_Nombre'] == ''
      && databla['Contenido_CH_Tipo_Cambio'] == 'Selecciona una opción'
      && databla['Contenido_CH_Fecha_Inicio'] == '')  {

        TotalNollenado = TotalNollenado + 1

  }

  for (let index = 0; index < dias.length; index++) {


    // Calcula horas sobre el horario programado

    if (databla['Contenido_CH_' + dias[index] + '_Entrada'] != "DS"
      && databla['Contenido_CH_' + dias[index] + '_Entrada'] != "Hora Ingreso"
      && databla['Contenido_CH_' + dias[index] + '_Salida'] != "Hora Salida"
    ) {

      // Calculo sobre la programacion de horario

      let HoraSal = databla['Contenido_CH_' + dias[index] + '_Salida'].substring(0, 2)
      let HoraIng = databla['Contenido_CH_' + dias[index] + '_Entrada'].substring(0, 2)
      let InterSal = databla['Contenido_CH_' + dias[index] + '_Salida'].substring(3, 5)
      let InterIng = databla['Contenido_CH_' + dias[index] + '_Entrada'].substring(3, 5)

      let Horas = HoraSal - HoraIng;
      let Inter = (InterSal - InterIng) / 60;

      // Si el horario es de madrugada

        if (Horas + Inter < 0) {
          var TiempoProg = (24 - HoraIng) + Number(HoraSal) + Inter;
        } else {
          var TiempoProg = Horas + Inter;
        }

      // Calculo sobre los break

      let HoraSalBk = databla['Contenido_CH_' + dias[index] + '_Salida'].substring(0, 2)
      let HoraIngBk = databla['Contenido_CH_' + dias[index] + '_Entrada'].substring(0, 2)
      let InterSalBk = databla['Contenido_CH_' + dias[index] + '_Salida'].substring(3, 5)
      let InterIngBk = databla['Contenido_CH_' + dias[index] + '_Entrada'].substring(3, 5)

      let HorasBk = HoraSalBk - HoraIngBk;
      let InterBk = (InterSalBk - InterIngBk) / 60;

      // Si el horario es de madrugada

        if (HorasBk + InterBk < 0) {
          var TiempoProgBk = (24 - HoraIngBk) + Number(HoraSalBk) + InterBk;
        } else {
          var TiempoProgBk = HorasBk + InterBk;
        }

      TotalhoraBk = TotalhoraBk + TiempoProgBk; 
      Totalhora = Totalhora + TiempoProg;

    } else {

      Totalhora = Totalhora + 0;

      if (databla['Contenido_CH_' + dias[index] + '_Entrada'] == "Hora Ingreso"
      && databla['Contenido_CH_' + dias[index] + '_Salida'] == "Hora Salida") {
        
        TotalNollenado = TotalNollenado + 1

      }

    }
  }

  console.log(TotalhoraCk);
  

  console.log(databla);

  if (TotalNollenado == 0){

    Swal.fire({
      title: 'Mensaje del sistema',
      text: "Usted esta registrando " + Totalhora + " Horas, Esta seguro de continuar?",
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
          data: { Controlador: 'Contenido_CH_Registrar', tabla: tabla },
          beforeSend: function (res) {
  
            console.log("Cargando");
          },
          success: function (res) {
  
          }
        })
      }
    })

  }
  else{

    swal.fire('Mensaje del sistema','Porfavor complete todos los campos','warning')

  }

  
});

// Autcompletado por documento o por dni

$('#Contenido_CH_Documento').on('keyup', function(){

  var valor = $(this).val();

  if(valor != ''){

    $.ajax({
      url: ruta + 'Controlador_Funciones_Ajax',
      type: 'get',
      async: true,
      data: {Controlador: 'BusquedaDniNombres', valor: valor },
      success: function(response) {
        var res = JSON.parse(response);
        //console.log(res);
        // Vaciamos la lista de opciones existentes
        $('#Contenido_CH_Documento_Autocompletado').empty();
        // Recorremos cada resultado y generamos un elemento HTML para cada uno
        $.each(res, function(index, value) {
            $('<li></li>')
                .attr('data-value', value.buscador)
                .text(value.buscador)
                .appendTo('#Contenido_CH_Documento_Autocompletado');
        });
    
        // Mostramos la lista de opciones
        $('#Contenido_CH_Documento_Autocompletado').fadeIn();
    }
    
    })

  }else{

    $('#Contenido_CH_Documento_Autocompletado').fadeOut();

  }

})

$('#Contenido_CH_Documento_Autocompletado').on('click', 'li', function() {

  var valorLi = $(this).text(); // Obtener el valor completo del elemento li
  var valorSinGuion = valorLi.split('-')[0]; // Obtener la parte antes del guion
  $('#Contenido_CH_Documento').val(valorSinGuion) // Mostrar en consola el valor obtenido

});

// Oculte autocompletar cuando se haga click afuera

$(document).click(function(event) {
  if(!$(event.target).closest('#Contenido_CH_Documento').length) {
    // El clic fue fuera del autocompletar, ocultarlo
    $('#Contenido_CH_Documento_Autocompletado').fadeOut();
  }
});

// Boton de descargar

$('#Exportado_Boton').on('click',function(){

  let variablecomboexp = $('#Exportado_ComboBox').val();

  if (variablecomboexp == 'Selecciona una opción') {
  
    swal.fire('Mensaje del Sistema','Seleccione una opcion','warning')

  }
  else{

    $.ajax({
      url: ruta + 'Controlador_Funciones_Ajax',
      type: 'get',
      async: true,
      data: {Controlador: 'ExportadosData', variablecomboexp: variablecomboexp },
      success: function(res) {

        var wb = XLSX.utils.book_new();
        // Convertir los datos JSON a una hoja de cálculo
        var ws = XLSX.utils.json_to_sheet(res);
        // Agregar la hoja de cálculo al objeto Workbook
        XLSX.utils.book_append_sheet(wb, ws, "Datos");
        // Descargar el archivo de Excel
        XLSX.writeFile(wb, "datos.xlsx");

    }
    
    })    

  }

})