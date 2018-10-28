<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index(){
        return view('login');
    }

    function verificarUsuario(){

        $data=request()->validate([
            'username'=>'required',
            'pass'=>'required'
        ],[
            'username.required'=>'El campo usuario es obligatorio',
            'pass.required'=>'El campo contraseña es obligatorio'
        ]);
        
        $usuario=Usuario::verificacion($data['username'],$data['pass']);
        
        if($usuario->esAdmin()){
            return view('index');
        }else if($usuario->esAlumno()){
            return view('alumno_index');
        }else{
            return "PROFESOR";
        }
    }
}
