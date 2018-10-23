<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['fecInicio','fecFin','profesor_id','modulo_id','turno_id','frecuencia_id'];
}
