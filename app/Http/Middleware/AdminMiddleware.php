<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Vérifiez si l'utilisateur est un administrateur
        if (auth()->user() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // Si l'utilisateur n'est pas un administrateur, redirigez-le ou affichez une erreur
        return redirect('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette page.');
    }

    protected $routeMiddleware = [
        // ...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}
