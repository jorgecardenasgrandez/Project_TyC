<?php

namespace App\Http\Controllers;
use App\Usuario;
use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


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
        
        $usuario->estado = 'conectado';
        $usuario->save();
        
        if($usuario->esAdmin()){
            return view('index');
        }else if($usuario->esAlumno()){
            return view('alumno_index');
        }else{
            return view('profesor_index');
        }
    }
    
    function cerrarSesion($usuario){
        
        $user = Usuario::where('usuario',$usuario)->first();
        $user->estado = 'desconectado';
        $user->save();
        
        return view('login');
    }
}
