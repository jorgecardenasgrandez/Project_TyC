<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) { // Se ejecuta cada ves que accede al controlador del login
            
            if(Auth::user()->user_type == 'administrador'){
                return redirect()->route('admi.index');
            }else if(Auth::user()->user_type == 'alumno'){
                return redirect()->route('alumno.index'); //nos redireccione a la ruta donde esta el controlador del alumno
            }else{
                return redirect()->route('profesor.index');
            } 
        }
        return $next($request);
        
    }
}
