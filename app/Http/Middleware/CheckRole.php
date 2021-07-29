<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   
    public function handle($request, Closure $next, $role, $role1)
    {
     
        if ((Auth::user()->role_id == $role) || (Auth::user()->role_id == $role1)){
            return $next($request);
        }
        // return \response()->json([
        //     'message' => 'not allowed!'
        // ]);

        return \response()->view('403page');

    }
}
