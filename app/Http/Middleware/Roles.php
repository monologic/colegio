<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $grupo)
    {
        if ($grupo == 'grupo1') {
            if (Auth::user()->usuariotipo_id != 3 || Auth::user()->usuariotipo_id != 6) {
                dd("No estas autorizado");
            }
        }
        if ($grupo == 'grupo2') {
            if (Auth::user()->usuariotipo_id != 3 || Auth::user()->usuariotipo_id != 4 || Auth::user()->usuariotipo_id != 6) {
                dd("No estas autorizado");
            }!=
        }
        if ($grupo == 'grupo3') {
            if (Auth::user()->usuariotipo_id != 3 || Auth::user()->usuariotipo_id != 4) {
                dd("No estas autorizado");
            }
        }
        if ($grupo == 'grupo4') {
            if (Auth::user()->usuariotipo_id != 6) {
                dd("No estas autorizado");
            }
        }
        if ($grupo == 'grupo5') {
            if (Auth::user()->usuariotipo_id != 4 || Auth::user()->usuariotipo_id != 6) {
                dd("No estas autorizado");
            }
        }
        return $next($request);
    }
}
