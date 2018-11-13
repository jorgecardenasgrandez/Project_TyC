<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departamento;
class Provincia extends Model
{
    function departamento(){
        return $this->belongsTo(Departamento::class);
    }
}
