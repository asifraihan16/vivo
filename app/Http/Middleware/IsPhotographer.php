<?php

namespace App\Http\Middleware;

use Closure;

class IsPhotographer
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
        if($request->user()->user_type == 2){
            return $next($request);
        }

        return redirect()->route('photographer.login');
    }
}
