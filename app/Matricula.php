<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    
    protected $filiable = ['cod_inscripcion',
                'fecMat',
                'montoLabo',
                'estudiante_dni',
                'numReciboPago',
                'grupo_id'];
}