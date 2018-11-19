<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
use App\Grupo;
use App\Nomina;

class Matricula extends Model
{
    
    protected $fillable = ['id',
                'fecMat',
                'montoLabo',
                'estudiante_dni',
                'numReciboPago',
                'grupo_id',
                'periodo_id'
                          ];


    function alumno(){
        return $this->belongsTo(Alumno::class,'estudiante_dni','dni');
    }

    function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    static function obtenerMatriculas($correo){
        $alumno=Alumno::where('correo',compact('correo'))->first();
        $dni=$alumno->dni;
        return Matricula::where('estudiante_dni',compact('dni'))->get();
    }
    function nomina(){
        return $this->hasOne(Nomina::class);
    }
}