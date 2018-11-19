<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modulo;
use App\Profesor;
use App\Turno;
use App\Frecuencia;
use App\Periodo;

class Grupo extends Model
{
    protected $fillable = ['fecInicio','fecFin','profesor_id','modulo_id','turno_id','frecuencia_id','periodo_id','nro_matriculados'];
    
    public static function getGrupo($id){
        $periodo_actual = Periodo::where('estado', 1)->first();
        return Grupo::where('modulo_id',$id)->where('periodo_id',$periodo_actual->id)->get();
    }
    
    public static function buscarGrupo($id){
        return Grupo::find($id);
    }
    
    function modulo(){
        return $this->belongsTo(Modulo::class);
    }

    function profesor(){
        return $this->belongsTo(Profesor::class);
    }

    function turno(){
        return $this->belongsTo(Turno::class);
    }

    function frecuencia(){
        return $this->belongsTo(Frecuencia::class);
    }   
}
