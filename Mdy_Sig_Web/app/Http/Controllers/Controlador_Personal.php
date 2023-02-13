<?php

namespace App\Http\Controllers;
use App\Models\Modelo_Personal;

use Illuminate\Http\Request;

class Controlador_Personal extends Controller
{
    public static function Controlador_Busca_Datos($vdocumento){

        $fecha = date('Y-m-d');

        $ejecuta = Modelo_Personal::where('documento',$vdocumento)
                                    ->where('fecha',$fecha)
                                    ->get()->toJson();

        print_r($ejecuta);

    }
}
