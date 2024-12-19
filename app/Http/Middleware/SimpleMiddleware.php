<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //deny
        // return response()->json([
        //     'message' => 'Access Denied'
        // ]);

        if(!auth()->check()){
            return response()->json([
                'message' => 'Denied'
            ]);
        }
        return $next($request);
    }
}
