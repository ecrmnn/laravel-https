<?php

namespace Ecrmnn\LaravelHttps\Http\Middleware;

use Closure;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (env('HTTPS') and (!$request->secure() or $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'http')) {
            return redirect()->secure($request->path());
        }

        return $next($request);
    }
}
