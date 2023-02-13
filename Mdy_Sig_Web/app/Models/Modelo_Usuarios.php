<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo_Usuarios extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'Mdy_Sig_Web.usuarios.usuarios_personal';
}
