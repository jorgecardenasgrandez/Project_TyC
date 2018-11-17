<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Matricula;
use App\Grupo;
use Auth;
class PdfController extends Controller
{

    function __construct(){
        $this->middleware('auth');                                 
    }

    function perfilPDF(){

        $correo=Auth::user()->email;        
        $alumno=Alumno::getAlumno($correo);
        $distrito=$alumno->distrito;
        $provincia=$distrito->provincia;
        $departamento=$provincia->departamento;

        $view= view('pdf.alumno_informacionPDF',compact('alumno','distrito','provincia','departamento'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();
        //$pdf=\PDF::loadView('alumno_informacion');
        
        //return $pdf->stream();
    }

    function matriculaPDF($idgrupo,$id){

        $matricula=Matricula::find($id);

        $grupo=Grupo::find($idgrupo);
        $modulo=$grupo->modulo;
        //$grupo=Grupo::find($idgrupo);
        $profesor=$grupo->profesor;
        //$grupo=Grupo::find($idgrupo);
        $turno=$grupo->turno;
        //$grupo=Grupo::find($idgrupo);
        $frecuencia=$grupo->frecuencia;
        
        $view= view('pdf.alumno_reporte_matriculaPDF',compact('matricula','grupo','modulo','profesor','turno','frecuencia'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('Matricula_Cetpro_JoseGalvez.pdf');
    }
}
