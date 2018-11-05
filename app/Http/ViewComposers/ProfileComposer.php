<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Usuario;
use App\Profesor;
 
class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $users = Usuario::where('estado','conectado')->first();
        $profesorlogeado = Profesor::where('correo', $users->usuario)->first();
        $view->with('user', $profesorlogeado);
    }
 
}

?>