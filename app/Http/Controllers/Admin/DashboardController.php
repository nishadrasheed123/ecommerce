<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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
        $totalProducts = Product::count();
        $productsInStock = Product::where('status', 1)->count();
        $productsOutOfStock = Product::where('status', 0)->count();
        $recentProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalProducts', 'productsInStock', 'productsOutOfStock', 'recentProducts'));
    }
}

