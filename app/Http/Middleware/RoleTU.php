<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleTU
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user() || $request->user()->role !== 'tu') {
            abort(403, 'Akses hanya untuk Tata Usaha.');
        }

        return $next($request);
    }
}