<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familiaprofesional;
use App\Opcionocupacional;
use App\Http\Requests\OpcionOcupacionalRequest;

class OpcionocupacionalController extends Controller
{
    function showRegistroOpcionOcup(){
        $lsfamiliasProfesionales=Familiaprofesional::all();
        return view('opcion_registrar',['FamiliasProf'=>$lsfamiliasProfesionales]);
    }

    function registroOpcionOcup(OpcionOcupacionalRequest $request){
        
        $opcionOcupacional=new Opcionocupacional;
        $opcionOcupacional->nombreOO=$request->nombre;
        $opcionOcupacional->fp_id=$request->familia;
        $opcionOcupacional->save();
        
        return back();
        //return redirect()->action('OpcionocupacionalController@showRegistroOpcionOcup');
    }
}
