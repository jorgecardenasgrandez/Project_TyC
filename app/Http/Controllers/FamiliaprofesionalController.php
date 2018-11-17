<?php

namespace App\Http\Controllers;

use App\Familiaprofesional;
use Illuminate\Http\Request;
use App\Http\Requests\FamiliaProfesionalRequest;
class FamiliaprofesionalController extends Controller
{
    function __construct(){
        $this->middleware('auth');                                
    }

    function showRegistroFam(){
        return view('familia_registrar');
    }

    function registrarFamiliaPro(FamiliaProfesionalRequest $request){
        $familiaProf=new Familiaprofesional;
        $familiaProf->nombreFP=$request->nombre;
        $familiaProf->save();

        return view('familia_registrar');
    }
}
