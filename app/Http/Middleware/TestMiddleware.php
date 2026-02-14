<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
 
        $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required|min:5'
        ]);   
        
        return $next($request);
    }
}
