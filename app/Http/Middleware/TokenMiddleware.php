<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;

class TokenMiddleware extends Controller
{

    public function handle(Request $request, Closure $next, string $token)
    {

        if ($request->input('token') === $token) {
            return $next($request);
        }
        abort(403);

    }
}
