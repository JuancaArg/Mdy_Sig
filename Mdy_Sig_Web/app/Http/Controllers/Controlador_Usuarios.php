<?php

namespace App\Http\Controllers;
use App\Models\Modelo_Usuarios;

use Illuminate\Http\Request;

class Controlador_Usuarios extends Controller
{

    public static function Controlador_Inicio_Sesion($vdocumento,$vpass){
        

        $ejecuta = Modelo_Usuarios::selectRaw('count(*) as q,nombres')
                                    ->where('Documento',$vdocumento)
                                    ->where('Documento',$vpass)
                                    ->groupby('nombres')
                                    ->take(1)
                                            ->get()->toArray();

        if ( $ejecuta[0]['q'] == 0) {
                
            print_r("usuario no existe");
    
        } else {
            
            
            print_r("ingreso correctamente, Usuario: " . $ejecuta[0]['nombres']);
    
            session_start(); 
    
            session(['status' => 'conectado']);
            session(['Nombres Completos' => $ejecuta[0]['nombres']]);
            session(['contador' => '0']);  
            
        };
    
    }    

    public function deleteSessionData(Request $request) {
        
        $request->session()->forget('status');
        $request->session()->forget('Nombres Completos');
        $request->session()->forget('contador');

        return redirect('/Default');

     }

}
