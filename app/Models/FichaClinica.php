<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaClinica extends Model
{
    use HasFactory;

    protected $table = 'ficha_clinica';
    protected $fillable = ['num_identificador', 'id_paciente'];

    // Define the relationship with the Paciente model
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
    public function atencionMedica()
    {
        return $this->hasMany(AtencionMedica::class, 'id_ficha_clinica');
    }
}
