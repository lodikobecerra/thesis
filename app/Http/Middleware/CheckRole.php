<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$type)
    {
        if(Auth::check()){
            if(Auth::user()->user_type == $type){
                return $next($request);
            } 
            
            return abort(401,"Forbidden");
        }
    }
}
