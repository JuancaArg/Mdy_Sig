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
        //$fecha = date('Y-m-d');
        //$vfecha->format('Y-m-d');
        //print_r($vfecha);

        $ejecuta = Modelo_Personal::where('documento', $vdocumento)
            ->where('fecha', $vfecha)
            ->get()->toJson();

        print_r($ejecuta);
    }

    public static function Controlador_Registra_Validacion_Asistencia($tabla)
    {
        print_r($tabla);
    }
    public static function Controlador_BusquedaDniNombres($valor){

        $resultados = Modelo_Personal::selectRaw("Concat(documento,' - ',AP_PATERNO,' ',AP_MATERNO,' ',NOMBRES) as buscador , documento")
        ->whereRaw("Concat(documento,' - ',AP_PATERNO,' ',AP_MATERNO,' ',NOMBRES) like ?",['%' . $valor.'%'])
        ->take(10)
        ->distinct()
        ->get();

        echo $resultados;

    }
    
}
