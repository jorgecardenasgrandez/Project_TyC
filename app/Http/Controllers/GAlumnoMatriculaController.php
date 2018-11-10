<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\PDF;
use Illuminate\Http\Request;
use App\Matricula;
use App\Alumno;
use App\Grupo;
class GAlumnoMatriculaController extends Controller
{
    function index(Alumno $alumno){
        /*$alumno=Alumno::where("dni",compact('dni'))->first();
        //dd($alumno->nombres);
        //$nombre_alumno=$alumno->nombres; dd($alumno->nombres); */
        return view('alumno_index',compact('alumno'));
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

    function generarPdfPerfil(){
        //$pdf=App::make('dompdf.wrapper');
        $pdf=PDF::loadView('alumno_informacion');
        //$pdf->loadView('welcome');
        return $pdf->stream();
        //return "GENERANDO PDF";
    }

    function reporteMatricula($dni){
        
        $alumno=Alumno::getAlumno($dni);
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

    function mostrarReporteNotas($dni){
        $matricula=Matricula::where('dni',compact('dni'))->first();
        
        return 'Mostrando reporte notas';
    }
}
