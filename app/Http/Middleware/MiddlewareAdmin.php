<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MiddlewareAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        if (!Auth::user()->is_admin == 1) {
            return redirect("/");
        }
        return $next($request);
    }
}
