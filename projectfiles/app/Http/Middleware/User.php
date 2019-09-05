<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
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
          if(!is_null(Auth::user()) && Auth::user()->type == 'user'){
            return $next($request);
        }
        return redirect()->route('home');
    }
}
