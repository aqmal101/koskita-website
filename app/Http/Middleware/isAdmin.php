<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{

    /**
     * Handle an incoming request
     * @param \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @param mixed 
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->is_admin == 1) {
            return $next($request);
        }

        return redirect('/')->with(403, 'Unauthorized action.');
    }
}