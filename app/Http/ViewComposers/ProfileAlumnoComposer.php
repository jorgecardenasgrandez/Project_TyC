<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Usuario;
 
class ProfileAlumnoComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = Usuario::where('estado','conectado')->first();
        $alumno=Usuario::getDatosAlumno($user->usuario);
        $view->with('alumno_composer', $alumno); 
    }
 
}

?>