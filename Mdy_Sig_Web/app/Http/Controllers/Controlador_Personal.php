<?php

namespace App\Http\Controllers;

use App\Models\Modelo_Personal;
use App\Models\Res_Asistencia;


use Illuminate\Http\Request;

class Controlador_Personal extends Controller
{
    public static function Controlador_Busca_Datos($vdocumento)
    {
        $fecha = date('Y-m-d');

        $ejecuta = Modelo_Personal::where('documento', $vdocumento)
            ->where('fecha', $fecha)
            ->get()->toJson();

        print_r($ejecuta);
    }

    public static function Controlador_Registra_Cambio_Horario($tabla)
    {
        print_r($tabla);
    }

    public static function Controlador_Resumen_Asistencia()
    {       
        $fecha = date('Y-m-d');
        $Fechadiff7 = date('Y-m-d',strtotime($fecha."-7 days"));

        $Doc = session('Documento');

        $ejecuta = Res_Asistencia::where('DOCUMENTO',$Doc)
            ->whereBetween('fecha', [$Fechadiff7, $fecha])
            ->OrderBy('fecha', 'DESC')
            ->get();

        echo $ejecuta;
    }

    public static function Controlador_Busca_Datos_Asistencia($vdocumento , $vfecha)
    {
        $fecha = date('Y-m-d');

        $ejecuta = Modelo_Personal::where('documento', $vdocumento)
            ->where('fecha', $fecha)
            ->get()->toJson();

        print_r($ejecuta);
    }
    
}
