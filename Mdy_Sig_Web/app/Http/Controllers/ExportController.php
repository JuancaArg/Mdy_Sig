<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelo_Usuarios;


// Añadir todos los modelos

class ExportController extends Controller
{
    
    public static function ExportData ($variablecomboexp){

        // Accion segun opcion de exportado

        if ($variablecomboexp == 'Control de Asistencia') {
            

            $ejecuta = Modelo_Usuarios::selectRaw('*')
            ->take(100)
                    ->get()->toJson();


        }

        print_r($ejecuta); 

    }

}
