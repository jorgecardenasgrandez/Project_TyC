<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
use App\Profesor;

class Usuario extends Model
{
    protected $fillable=[
        'usuario',
        'password',
        'usuario_type'
    ];

    //public $timestamps='false';

    function usuario(){
        return $this->morphTo();
    }
    
    function esAdmin(){
        if($this->usuario === 'administradorCetpro@gmail.com'){
            if($this->password == 'admi'){
                return true;
            }
        }
        return false;
    }

    function esProfesor(){
        return $this->usuario_type === 'profesor';
    }

    function esAlumno(){
        return $this->usuario_type === 'alumno';
    }

    static function verificacion($username,$pass){
        return Usuario::where('usuario',compact('username'))->where('password',compact('pass'))->first();
    }

    static function getDatosAlumno($email){
        return Alumno::where('correo',compact('email'))->first(); 
    }
    
}
