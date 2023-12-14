<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rol_id=auth()->user()->role_id;
        if ($rol_id==1){
            return $next($request);

        }else if ($rol_id==2){
            return $next($request);

        }else if ($rol_id==3){
            return $next($request);

        }else if ($rol_id==4){
            return $next($request);

        }else{

            return response('No Autorizado', 403)->header('Tu Gestor - Error', 'Acceso Denegado');

        }
    }
}
