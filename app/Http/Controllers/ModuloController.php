<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modulo;
//use App\Http\Requests\ModuloRequest;

class ModuloController extends Controller
{
    function showRegistroModulo(){
        return view('modulo_registrar');
    }

    function registrarModulo(ModuloRequest $request){
            
            
            $modulo=new Modulo;
            $modulo->nombreMod=$request->name;
            $modulo->duracion=$request->duracion;
            $modulo->oo_id=$request->opcion_ocupacional;
            $modulo->save();
           
            /*$this->validate($request,['nombre'=>'required', 'duracion'=>'required','opcion_ocupacional'=>'required']);
            Modulo::create([
                'nombreMod' => request('nombre'),
                'duracion' => request('duracion'),
                'oo_id'=> request('opcion_ocupacional'),
                'estado' => 1                     
            ]);*/
            return redirect()->route('/showRegistroModulo');
    }
    
    function mostrarModulos(){
        
        /**
         * VISTA PARA MOSTRAR LOS MODULOS
         */
        $lsmodulos=Modulo::orderBy('nombreMod','ASC')->paginate();
        return view('modulo_mostrar',compact('lsmodulos'));
    }
    
    function getModulo($id){
        $modulo=Modulo::find($id);
        
        return view('getModulo',compact('modulo'));
    }

    function editarModulo(ModuloRequest $request,$id){
        $modulo=Modulo::find($id);

        $modulo->nombreMod=$request->nombre;
        $modulo->duracion=$request->duracion;
        $modulo->oo_id=$request->opcion_ocupacional;
        $modulo->estado=1;

        $modulo->save();

        return view('editarModulo');
    }

    function borrarModulo($id){
        $modulo=Modulo::find($id);
        $modulo->delete();
    }
}
