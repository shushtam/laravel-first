<?php

namespace App\Http\Middleware;

use Closure;

class NameMiddleware
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
            if(preg_match("/[A-Za-z]+/", $request->name))
            echo "Your name is ".$request->name;
            else
            echo "Name can contain only letters";

        return $next($request);
    }
}
