<?php

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Periodo;

class ProfilePeriodoComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $periodo_actual = Periodo::where('estado',1)->first();
        $view->with('periodo', $periodo_actual);
    }
}
?>