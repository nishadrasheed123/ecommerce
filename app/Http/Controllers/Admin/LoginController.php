<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display the login form for admins.
     */
    public function index()
    { 
        // Return the view for the admin login page
        return view('admin.login');
    }

    /**
     * Handle admin login authentication.
     */
    public function doLogin(Request $request)
    {
        // Validate the HTTP method
        if (!$request->isMethod('post')) {
            return redirect()->route('admin.login')->withErrors('Invalid request method.');
        }

        // Validate the request inputs
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt authentication for the admin guard
        if (Auth::guard('admin')->attempt($request->only('username', 'password'))) {
            // Redirect to the admin dashboard on success
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        // If authentication fails, redirect back with errors
        return redirect()->back()->withErrors(['login' => 'Invalid username or password.'])->withInput();
    }
}


