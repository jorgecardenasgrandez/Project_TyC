<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Matricula;
use App\Distrito;
class Alumno extends Model
{
    protected $primaryKey ='dni';
    
    protected $fillable = ['dni', 'nombres', 'apePaterno', 'apeMaterno','sexo','ecivil','gradoInstruccion', 'fnacimiento',
    'ocupacion','telefono','correo','domicilio','distrito_id','estado_alumno'];
    
    function matriculas(){
        return $this->hasMany(Matricula::class,'estudiante_dni','dni');
    }

    static function getAlumno($dni){
        return Alumno::where('dni',compact('dni'))->first();
    }

    function distrito(){
        return $this->belongsTo(Distrito::class);
    }
}
