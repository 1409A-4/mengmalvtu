<?php

namespace App\Http\Middleware;

use Closure;

class BusinessMiddleware
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
        if(!session('bid')){
            return redirect('business/login')->with(['messages'=>"请登录！"]);
        }
        return $next($request);
    }
}
