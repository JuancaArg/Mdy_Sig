<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Controlador_Funciones_Ajax extends Controller
{
    
    public function Deriva_Controladores_Ajax(Request $request){

        $Controlador = $request->query('Controlador');

        if (isset($Controlador)) {

            if ($Controlador == 'prueba') {
          
                //$ejecuta = Consultas_Basicas::consultabasiva();
        
                //print_r($ejecuta);
             }
             elseif ($Controlador == 'Login_inicio_sesion'){
        
                $vdocumento =  $request->query('Documento');
                $vpass =  $request->query('Pass');
        
                $ejecuta = Controlador_Usuarios::Controlador_Inicio_Sesion($vdocumento,$vpass);
                
             }
             elseif ($Controlador == 'Busca_Agente'){
              
              $vdocumento = $request->query('Documento');

              $ejecuta = Controlador_Personal::Controlador_Busca_Datos($vdocumento);
        
           }     
        
        }

    }
    
}
