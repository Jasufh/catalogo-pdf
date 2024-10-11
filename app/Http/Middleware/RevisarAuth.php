<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RevisarAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
           // Verifica si el usuario está autenticado
           if (!Auth::check()) {
            // Si no está autenticado, redirige al login
            return redirect()->route('login');
        }

        // Si está autenticado, continúa con la solicitud
        return $next($request);
    }
}
