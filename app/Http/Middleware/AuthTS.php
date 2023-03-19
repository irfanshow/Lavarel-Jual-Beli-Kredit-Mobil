<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthTS extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected function redirectToTS($request)
    {
        foreach ($guards as $guard) {
            if (!Auth::guard($guard)->check()) {
                return route('login');
            }
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
