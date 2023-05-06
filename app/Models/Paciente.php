<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';
    protected $fillable = [
        'nombre_completo',
        'num_identificacion',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'ocupacion',
        'sistema_salud',
    ];
}
