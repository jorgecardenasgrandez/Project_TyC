<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modulo;
use App\Profesor;
use App\Turno;
use App\Frecuencia;

class Grupo extends Model
{
    protected $fillable = ['fecInicio','fecFin','profesor_id','modulo_id','turno_id','frecuencia_id'];
    
    public static function getGrupo($id){
        return Grupo::where('modulo_id',$id)->get();
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
