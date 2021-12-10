<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if ($this->isAdmin($request)) {
            return $next($request);
        }
        abort(403);
    }

    protected function isAdmin(Request $request)
    {
        return true;
    }
}
