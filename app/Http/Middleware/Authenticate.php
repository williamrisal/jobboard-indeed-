<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Redirect;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if($request->routeIs('company.*')) {
                return route('company.login');
            }
            if ($request->routeIs('monitoring.*')) {
                if (User::where("id", auth()->user()->id)->isadmin == 1) {
                    return route("monitoring");
                }
//                redirect::route("home")->withErrors(['Forbidden','Forbidden']);
            }
            redirect::route('login')->withErrors(['Connection required.', 'Connection required.']);
        }
    }
}
