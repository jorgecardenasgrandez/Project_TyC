<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       /* View::composers(['profesor_index','profesor_informacion','profesor_ver_modulo','profesor_ingresa_nota','profesor_cambiar_contraseña'],'App\Http\ViewComposers\ProfileProfesorComposer');
        */

        View::composers(['App\Http\ViewComposers\ProfileProfesorComposer' => ['profesor_index','profesor_informacion','profesor_ver_modulo','profesor_ingresa_nota','profesor_cambiar_contraseña','profesor_alumnos_x_modulo'],
                       'App\Http\ViewComposers\ProfileAdminComposer' => ['index','alumno_registrar','matricula_formulario'],
                       'App\Http\ViewComposers\ProfileAlumnoComposer' => 'layouts.sidebar_alumno'
                       ]
                    );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}