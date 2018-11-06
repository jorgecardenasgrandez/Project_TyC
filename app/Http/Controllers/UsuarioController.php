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
        
        if(!empty($usuario)){
            if($usuario->esAdmin()){

                return view('index');
            }else if($usuario->esAlumno()){

                $alumno=Usuario::getDatosAlumno($usuario->usuario);
                //return redirect()->route('alumno.index',$alumno);
                return view('alumno_index',['alumno'=>$alumno]); 
                //return redirect()->route('alumno.index');
            }else{
                return "PROFESOR";
            }
        }
        else{
            return redirect()->route('login.index');
        }
    }
}
