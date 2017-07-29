<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Coach
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
        if ( Auth::check() && Auth::user()->user_role_id === 3 )
        {
            return $next($request);
        }

        return redirect('/');
    }
}
