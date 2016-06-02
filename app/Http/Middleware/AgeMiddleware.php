<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
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
                /*if ($request->input('age') <= 200) {
            return redirect('cars');*/
            if(is_numeric($request->age) && $request->age>0 && $request->age<200)
            echo "Your age is ".$request->age;
            else
            echo "Your age is ???, enter number";
        return $next($request);
    }
}
