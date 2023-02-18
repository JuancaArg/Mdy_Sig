
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

$('#btn-sol-cambio-horario').click(function () {

  // Extract data form table

  var tabla = $('#Contenido_CH_Formulario').serialize();

  var databla = parseQueryString(tabla);

  // Calcula Horas por cada fecha 

  let Totalhora = 0;

  for (let index = 0; index < dias.length; index++) {

    // Valida si no DS

    if (   databla['Contenido_CH_' + dias[index] + '_Salida'] != "DS" 
        && databla['Contenido_CH_' + dias[index] + '_Entrada'] != "Hora ingreso" 
        && databla['Contenido_CH_' + dias[index] + '_Salida'] != "Hora ingreso" ) {

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

      Totalhora = Totalhora + TiempoProg;

      console.log("bien");

    }else{

      Totalhora = Totalhora + 0;

      console.log("mal");

    }
  }

  console.log(Totalhora);


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

});

