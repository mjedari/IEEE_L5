<?php

namespace App\Http\Middleware;

use Closure;

class IpMiddleware
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
        //Enter your ip here
        if(in_array($request->getClientIp(),['::1', '1.1.1.1', ''])){
            return $next($request);
        } else {
            return redirect('/coming');
        }

    }
}
