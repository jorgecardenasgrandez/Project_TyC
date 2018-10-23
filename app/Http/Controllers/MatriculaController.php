<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modulo;
use App\Matricula;
use App\Frecuencia;
use App\Turno;
use App\Alumno;


class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulos = Modulo::all();
        $alumnos = Alumno::all();
        return view('matricula_formulario',compact('modulos','alumnos'));
    }
    
    
    
    public function obtenerFrecuencia(Request $request,$id){
        if($request->ajax()){
            $fil = substr($id,1,1);
            $frecuencia = Frecuencia::getFrecuencia($fil);
            return response()->json($frecuencia);
        }
        
    }
    
    public function obtenerTurno(Request $request,$id){
        if($request->ajax()){
            $fil2 = substr($id,2,1);
            $turno = Turno::getTurno($fil2);
            return response()->json($turno);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fil2 = substr(request('grupo'),0,1);
        Matricula::create([
                'fecMat' => request('fecha'),
                'montoLabo' => 25.00,                       //valor por defecto
                'estudiante_dni' => request('nombres'),
                'numReciboPago' => request('recibo'),
                'grupo_id' => (integer)$fil2      
        ]);
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
