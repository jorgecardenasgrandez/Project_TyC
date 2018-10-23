<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    public static function getTurno($id){
        return Turno::find($id);
    }
}
