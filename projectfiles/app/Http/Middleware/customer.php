<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class customer
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
       // dd(Auth::user());
       if(!is_null(Auth::customer()) && Auth::customer()->type == 'customer'){
        return $next($request);
    }
    return redirect()->route('home');
    }
}
