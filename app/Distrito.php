<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provincia;
class Distrito extends Model
{
    protected $fillable=[
        'nombre','provincia_id'
    ];

    function provincia(){
        return $this->belongsTo(Provincia::class);
    }
}
