<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
use App\Grupo;

class Matricula extends Model
{
    
    protected $fillable = ['id',
                'fecMat',
                'montoLabo',
                'estudiante_dni',
                'numReciboPago',
                'grupo_id'];


    function alumno(){
        return $this->belongsTo(Alumno::class,'estudiante_dni','dni');
    }

    function grupo(){
        return $this->belongsTo(Grupo::class);
    }
}