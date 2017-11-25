<?php

namespace App\Http\Middleware;

use Closure;

class CheckHelper
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
        $helper = auth()->user()->helper;
        if ($id && $helper == '1') {
            return $next($request);
        }

        abort(404);
    
    }
}
