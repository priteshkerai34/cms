<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class testmiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->country && !in_array($request->country,array("us","in","can"))) {
            return redirect("noaccess");
        }
        return $next($request);
    }
}
