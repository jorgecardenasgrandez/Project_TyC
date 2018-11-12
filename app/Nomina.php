<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $fillable=[
        'nota1',
        'nota2',
        'nota3',
        'observacion',
        'matricula_id'
    ];
}
