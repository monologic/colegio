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
            if (Auth::user()->usuariotipo_id == ) {
                # code...
            }
        }
        return $next($request);
    }
}
