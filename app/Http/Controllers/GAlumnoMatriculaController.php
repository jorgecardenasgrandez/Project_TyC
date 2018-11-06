<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Alumno;
use App\Grupo;
class GAlumnoMatriculaController extends Controller
{
    function index(Alumno $alumno){
        /*$alumno=Alumno::where("dni",compact('dni'))->first();
        //dd($alumno->nombres);
        //$nombre_alumno=$alumno->nombres;
        dd($alumno->nombres);*/
        return view('alumno_index',compact('alumno'));
    }

    function reporteMatricula(){
        $alumno=Alumno::where("dni","70992942")->first();
        $matricula=$alumno->matriculas;
        return view('alumno_reporte_matricula',['matricula'=>$matricula]);
    }

    function mostrarDetalleMatricula($idgrupo){
        $grupo=Grupo::find($idgrupo);
        $modulo=$grupo->modulo;

        $grupo=Grupo::find($idgrupo);
        $profesor=$grupo->profesor;

        $grupo=Grupo::find($idgrupo);
        $turno=$grupo->turno;

        $grupo=Grupo::find($idgrupo);
        $frecuencia=$grupo->frecuencia;

        return view('alumno_reporte_matricula',[
            'modulo'=>$modulo,
            'profesor'=>$profesor,
            'turno'=>$turno,
            'frecuencia'=>$frecuencia
        ]);
    }
}
