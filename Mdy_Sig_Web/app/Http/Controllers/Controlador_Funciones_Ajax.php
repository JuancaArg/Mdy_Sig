<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Controlador_Funciones_Ajax extends Controller
{
    
    public function Deriva_Controladores_Ajax(Request $request){

        return print_r("hola");

        $Controlador = $request->input('Login_inicio_sesion');

        
        if (isset($_POST['Controlador'])) {

            if ($_POST['Controlador'] == 'prueba') {
          
                //$ejecuta = Consultas_Basicas::consultabasiva();
        
                //print_r($ejecuta);
             }
             elseif ($_POST['Controlador'] == 'Login_inicio_sesion'){
        
                $vdocumento = $request->input("Documento");
                $vpass = $request->input("Pass");

                print_r("hola");
        
                //$ejecuta = Controlador_Login::Controlador_Inicio_Sesion($vdocumento,$vpass);
                
             }
             elseif ($_POST['Controlador'] == 'Busca_Agente'){
        
        
              $vdocumento = $_POST["Documento"];
        
              //$ejecuta = Controlador_Personal::Controlador_Busca_Datos($vdocumento);
        
           }     
        
        }

    }
    
}
