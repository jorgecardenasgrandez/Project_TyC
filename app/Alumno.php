<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $primaryKey ='dni';
    
    protected $fillable = ['dni', 'nombres', 'apePaterno', 'apeMaterno','sexo','ecivil','gradoInstruccion', 'fnacimiento',
	'ocupacion','telefono','correo','domicilio','idDistritoDom','estado_alumno'];
}
