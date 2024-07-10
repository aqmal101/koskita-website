<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isUser
{
    /**
     * Handle an incoming request
     * 
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $request
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->is_admin == 0) {
            return $next($request);
        }

        return redirect('/')->with(403, 'Unauthorized action.');
    }
}