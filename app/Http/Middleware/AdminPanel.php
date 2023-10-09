<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $this->entrance($next,$request);
    }

    public function entrance($next,$request){
        if(session('session_status' === 'admin')){
            return $next($request);
        }else{
            return back();
        }
    }
}
