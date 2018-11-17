<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Usuario;
use App\Profesor;
use App\Grupo;
use App\Modulo;
use App\Turno;
use App\Frecuencia;
use Auth;
class ProfileProfesorComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //$users = Usuario::where('estado','conectado')->first();
        $correo=Auth::user()->email;
        $profesorlogeado = Profesor::where('correo', $correo)->first();
        $grupos = Grupo::where('profesor_id',$profesorlogeado->id)->get();
        
        $grupodetalles = array();
        
        $fil = 0;
        foreach($grupos as $grupo){
            
            $mod = Modulo::find($grupo->modulo_id);
            $tur = Turno::find($grupo->turno_id);
            $fre = Frecuencia::find($grupo->frecuencia_id);
            
            $grupodetalles[$fil] = array('nro' =>$grupo->id ,
                                                  'modulo'=>$mod->nombreMod,
                                                  'turno' =>$tur->descripcion,
                                                  'frecuencia' =>$fre->descripcion,
                                                  'inicio'=>$grupo->fecInicio,
                                                  'fin'=>$grupo->fecFin
                                        );
            $fil++;
                                       
        };
            
        
        $view->with(['user' => $profesorlogeado,
                     'gruposprofesor' => $grupodetalles
                    ]);
            
    }
 
}

?>