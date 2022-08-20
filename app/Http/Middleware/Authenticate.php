<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
//use App\Http\Middleware\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected    function redirectTo(Request $request)
    {
     
        if (!$request->expectsJson()) {
            if ($request->is('admin/*'))
                return route('admin.login');
            else
                return route('login');

        }











    }
}
