<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Distrito;
use App\Usuario;

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
        $distritos = Distrito::where('provincia_id',15)->get();
        return view('create_profesor',compact('distritos'));
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
        /*SE PUEDE MEJORAR USANDO CLASES REQUEST
        $this->validate($request,['nombres'=>'required', 'apellido-paterno'=>'required', 'apellido-materno'=>'required','sexo'=>'required','fecha-nacimiento'=>'required']);
        */
        Profesor::create([
                'nom_prof' => request('nombres'),
                'apePaterno_prof' => request('apellido-paterno'),
                'apeMaterno_prof' => request('apellido-materno'),
                'sexo_prof' => request('sexo'),
                'fechaNac_prof' => request('fecha-nacimiento'),
                'domicilio' => request('domicilio'),
                'distritoDom_id' => request('distrito'),
                'estado_prof' => 1 ,                    //el profesor esta activo               
                'dni' => request('dni'),
                'correo' => request('correo')
        ]);
        
        Usuario::create(
            [
                'usuario'=>request('correo'),
                'password'=>request('dni'),
                'usuario_type'=>'profesor'
            ]
        );
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
        $profesor->domicilio = request('domicilio');
        $profesor->distritoDom_id = request('distrito');
        $profesor->estado_prof = request('estado');
        $profesor->dni = request('dni');
        $profesor->correo = request('correo');
        $profesor->save();
        
        return redirect()->route('profesor.index')->with('message','Registro actualizado satisfactoriamente');
 
        //return view('index');
    }
    
    public function edit_inicial()
    {
        $profesores = Profesor::all();
        $distritos = Distrito::where('provincia_id',15)->get();
        return view('profesor_modificar',compact('profesores','distritos'));
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
