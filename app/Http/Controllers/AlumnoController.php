<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Usuario;

class AlumnoController extends Controller
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
        $distritos=Distrito::all();
        $provincias=Provincia::all();
        $departamentos=Departamento::all();
        return view('alumno_registrar',compact('distritos','provincias','departamentos'));
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
        /*
        $this->validate($request,['dni'=>'required', 'nombres'=>'required', 'apePaterno'=>'required', 'apeMaterno'=>'required','sexo'=>'required','ecivil'=>'required','gradoInstruccion'=>'required', 'fnacimiento'=>'required',
                                  'ocupacion'=>'required','telefono'=>'required','correo'=>'required','domicilio'=>'required','idDistritoDom'=>'required']);
        */
        Alumno::create([
                'dni' => request('dni'),
                'nombres' => request('nombres'),
                'apePaterno' => request('apellido-paterno'),
                'apeMaterno' => request('apellido-materno'),
                'sexo' => request('sexo'),
                'ecivil' => request('estado-civil'),
                'gradoInstruccion' => request('grado-instruccion'),
                'fnacimiento' => request('fecha-nacimiento'),
                'ocupacion' => request('ocupacion'),
                'telefono' => request('numero'),
                'correo' => request('email'),
                'domicilio' => request('domicilio'),
                'distrito_id' => request('distrito'),
                'estado_alumno' => 1                     //el profesor esta activo
        ]);
        
        Usuario::create(
            [
                'usuario'=>request('email'),
                'password'=>request('dni'),
                'usuario_type'=>'alumno',
                'estado'=>'desconectado'
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
