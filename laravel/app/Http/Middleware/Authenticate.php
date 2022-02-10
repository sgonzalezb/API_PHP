<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // public function handle($request, Closure $next, $guard = null)
    // {

    //     // si la persona no inició sesión, entonces ....
    //     if (Auth::guard($guard)->guest()) {

    //         if ($request->ajax()) {

    //             return response('Unauthorized.', 401);

    //         } else {

    //             // si la persona no inició sesión y no es una solicitud ajax
    //             // enviar al formulario de ingreso
    //             return redirect()->guest('entrar');

    //         }
    //     }

    //     return $next($request);
    // }
}
