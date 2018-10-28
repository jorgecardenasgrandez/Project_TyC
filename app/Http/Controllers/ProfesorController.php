<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesorController extends Controller
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
        return view('create_profesor');
    }
    
    public function obtenerProfesor(Request $request, $id){
        
        if($request->ajax()){
            $prof = Profesor::getProfesor($id);
            return response()->json($prof);
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
        //SE PUEDE MEJORAR USANDO CLASES REQUEST
        $this->validate($request,['nombres'=>'required', 'apellido-paterno'=>'required', 'apellido-materno'=>'required','sexo'=>'required','fecha-nacimiento'=>'required']);
        Profesor::create([
                'nom_prof' => request('nombres'),
                'apePaterno_prof' => request('apellido-paterno'),
                'apeMaterno_prof' => request('apellido-materno'),
                'sexo_prof' => request('sexo'),
                'fechaNac_prof' => request('fecha-nacimiento'),
                'estado_prof' => 1                     //el profesor esta activo
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
        $profe=Profesor::find($id);
        return view('libro.edit',compact('profe'));
    }
    
    public function modificar(Request $request)
    {
        /*
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);
        */
        $idprofesor = request('idprof');
        $profesor = Profesor::getProfesor((integer)$idprofesor);
        $profesor->nom_prof = request('nombres');
        $profesor->apePaterno_prof = request('apellido-paterno');
        $profesor->apeMaterno_prof = request('apellido-materno');
        $profesor->sexo_prof = request('sexo');
        $profesor->fechaNac_prof = request('fecha-nacimiento');
        $profesor->estado_prof = request('estado');
        $profesor->save();
        
        return redirect()->route('profesor.index')->with('message','Registro actualizado satisfactoriamente');
 
        //return view('index');
    }
    
    public function edit_inicial()
    {
        $profesores = Profesor::all();
        return view('profesor_modificar',compact('profesores'));
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
