<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtencionMedica extends Model
{
    use HasFactory;

    protected $table = 'atencion_medica';

    protected $fillable = [
        'id_ficha_clinica',
        'fecha_hora',
        'descripcion',
        'tipo_atencion',
        'desiciones_paciente'
    ];

        public function fichaClinica()
        {
            return $this->belongsTo(FichaClinica::class, 'id_ficha_clinica');
        }
    
}

