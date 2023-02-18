<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res_Asistencia extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'BD_CONTROL_ASISTENCIA.dbo.V_ASISTENCIA_RESUMEN';
}
