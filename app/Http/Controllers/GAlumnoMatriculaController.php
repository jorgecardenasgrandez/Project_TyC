<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\PDF;
use Illuminate\Http\Request;
use App\Matricula;
use App\Alumno;
use App\Grupo;
class GAlumnoMatriculaController extends Controller
{
    function index(){
        return view('alumno_index');
    }

    function perfil($dni){
        
        $alumno=Alumno::getAlumno($dni);
        $distrito=$alumno->distrito;
        $provincia=$distrito->provincia;
        $departamento=$provincia->departamento;
        return view('alumno_informacion',[
            'alumno'=>$alumno,
            'distrito'=>$distrito,
            'provincia'=>$provincia,
            'departamento'=>$departamento
            ]);
    }

    function reporteMatricula($dni){
        
        $alumno=Alumno::getAlumno($dni);
        $matriculs=$alumno->matriculas; //genera las matriculas que tiene el alumno

        return view('alumno_reporte_matricula',[
            'matriculs'=>$matriculs
        ]);
    }

    function arreglarSidebar($id){

        return view('probando_sidebar',compact('id'));
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

        return view('alumno_matricula_detalle',[
            'grupo'=>$grupo,
            'modulo'=>$modulo,
            'profesor'=>$profesor,
            'turno'=>$turno,
            'frecuencia'=>$frecuencia
        ]);
    }

    function mostrarReporteNotas($dni){
        $matricula=Matricula::where('dni',compact('dni'))->first();
        
        return 'Mostrando reporte notas';
    }
}
