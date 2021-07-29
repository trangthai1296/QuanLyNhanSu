<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
     
        if (Auth::user()->role_id == $role) {
            return $next($request);
        }
        return \response()->view('403page');
    }
}
