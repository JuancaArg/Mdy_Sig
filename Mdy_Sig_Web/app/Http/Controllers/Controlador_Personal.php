<?php

namespace App\Http\Controllers;

use App\Models\Modelo_Personal;
use App\Models\Res_Asistencia;

use Carbon\Carbon;

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
    public static function Controlador_Resumen_Asistencia(){
        
        $fechaActual = date('Y-m-d');
        //Carbon::now();
        //$fechaHace1Dia = $fechaActual->subDays(1);
        //$fechaHace7Dias = $fechaActual->subDays(7);

        $Doc = session('Documento');

        $ejecuta = Res_Asistencia::where('DOCUMENTO',$Doc)
            //->whereBetween('FECHA_HORARIO', [$fechaHace1Dia,  $fechaHace7Dias])
            ->get()->toJson();

        print_r($fechaActual);
        //print_r($fechaHace1Dia);
        //print_r($fechaHace7Dias);

        //$fecha = Carbon::createFromFormat('Y-m-d H:i:s', $datos['fecha'])->format('d/m/Y');

    }
    
}
