<?php

namespace App\Http\Middleware;
Use Auth;

use Closure;

class Family
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'family') {
            return $next($request);
        }    }
}
