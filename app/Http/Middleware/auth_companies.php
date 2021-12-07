<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class auth_companies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
//            flash("Vous devez être connecté pour voir cette page.")->error();

            return redirect('/login');
        }
        return $next($request);
    }
}
