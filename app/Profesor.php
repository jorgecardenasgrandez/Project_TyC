<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $fillable = ['nom_prof', 'apePaterno_prof', 'apeMaterno_prof','sexo_prof','fechaNac_prof','estado_prof'];
    
    public static function getProfesor($id){
        $profesor = Profesor::find($id);
        return $profesor;
    }
}
