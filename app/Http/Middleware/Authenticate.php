<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if ($request->is('admin/*')) {
            return route('admin.login'); // Redirect to the admin login route
        }

        return route('login'); // Redirect to the default login route for web users
    }
}

