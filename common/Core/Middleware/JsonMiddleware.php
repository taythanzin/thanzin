<?php

namespace Common\Core\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        //$request->headers->set('Content-Type', 'application/json');

        return $next($request);
    }
}
