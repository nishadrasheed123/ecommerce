<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Apply middleware to ensure only authenticated admins can access this controller.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        // Return the admin dashboard view
        return view('admin.dashboard');
    }
}

