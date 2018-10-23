<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frecuencia extends Model
{
    public static function getFrecuencia($id){
        return Frecuencia::find($id);
    }
}
