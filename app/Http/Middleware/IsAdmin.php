<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        $id = auth()->user()->id;
        $level = auth()->user()->level;
        //dd($level);
        if($id && $level!="7"){
            //return "complect";
            return $next($request);            
        }else {
            //return "ERROR";
            abort(403);
        }
    }
}
