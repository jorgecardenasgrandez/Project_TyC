<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Usuario;
 
class ProfileAdminComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        /*$users = Usuario::where('estado','conectado')->first();
        $view->with('user', $users);*/ 
    }
 
}

?>