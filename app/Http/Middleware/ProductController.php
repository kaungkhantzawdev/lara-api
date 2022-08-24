<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->header('key') != "abcd"){
            return response()->json(['message'=>'access denied'],404);
        }
        return $next($request);
    }
}
