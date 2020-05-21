<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        // If user is not an admin redirect back
        if(!Auth::user()->is_admin) {
            
            return redirect()->back();
        }
        return $next($request);
    }
}
