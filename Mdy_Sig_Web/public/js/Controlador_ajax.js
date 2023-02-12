$(document).ready(function(){

$('#prueba').click(function(){

    $.ajax({
        url: 'Controlador/Controlador_Funciones.php',
        type: 'POST',
        async: true,
        data: {Controlador:'prueba'},
        beforeSend: function (res) {
  
          console.log("Cargando Importes...");
  
        },
        success: function (res) {

          var v_resultado = JSON.parse(res);
  
          $('#prueba_texto').text(res);

          console.log(v_resultado[0]);
  
        }
  
      });    

});

$('#login_button_inicia_sesion').click(function() {

  var v_documento = $('#login_dni').val();
  var v_pass =  $('#login_pass').val()

  $.ajax({

    url:'Controlador/Controlador_Funciones.php',
    type:'post',
    async:true,
    data:{Controlador:'Login_inicio_sesion',Documento: v_documento, Pass: v_pass}
    ,beforeSend: function(){

      console.log(v_documento+' '+v_pass);

    }

    ,success: function(res) {

      console.log(res);

      if (res.substring(0,7) == 'ingreso') {
        
        Swal.fire('Mensaje',res,'success');

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

      
      }else
      {

        Swal.fire('Mensaje','Usuario desactivo o credenciales incorrectas','error')

      }

    }

  });

})

  $('#Cambio_Descanso_Btn_Busca_Documento').click(function() {
    
    //Extrae informacion

    Documento = $('#Cambio_Descanso_Documento').val();


    $(Cambio_Descanso_Nombre_Asesor).val('');
    $(Cambio_Descanso_Campaña_Asesor).val('');
    $(Cambio_Descanso_Condicion_Asesor).val('');    

    $.ajax({
      url:'Controlador/Controlador_Funciones.php',
      type:'post',
      async:true,
      data:{Controlador:'Busca_Agente',Documento: Documento}
      ,beforeSend: function(res){

        console.log("Cargando");

      }, success: function (res) {
        
        resultado = JSON.parse(res);
        console.log(resultado.length );


        if(resultado.length  == 0){

          swal.fire('Mensaje del sistema','Personal no existe','error')

        }else{


          $(Cambio_Descanso_Nombre_Asesor).val(resultado[0]["NOMBRES"]+' '+resultado[0]["AP_PATERNO"]+' '+resultado[0]["AP_MATERNO"]);
          $(Cambio_Descanso_Campaña_Asesor).val(resultado[0]["CAMPANIA"]);
          $(Cambio_Descanso_Condicion_Asesor).val(resultado[0]["CONDICION_LABORAL"]);
  

        }

      }      
    });

  });

});