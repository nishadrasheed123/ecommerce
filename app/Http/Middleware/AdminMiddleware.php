<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Check if the user is authenticated and has an admin role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Allow the request to proceed if the user is an admin
        }

        // Redirect to the login page if the user is not an admin or not authenticated
        return redirect()->route('admin.login');
    }
}
