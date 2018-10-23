<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    
    protected $fillable = ['cod_inscripcion',
                'fecMat',
                'montoLabo',
                'estudiante_dni',
                'numReciboPago',
                'grupo_id'];
}