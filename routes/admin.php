<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::get('admin/login', [LoginController::class, 'index']);
    // Route::post('admin/do-login', [LoginController::class, 'doLogin'])->name('do.login');
    Route::post('/admin/do-login', [LoginController::class, 'doLogin'])->name('admin.doLogin');
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/products', [ProductController::class, 'list'])->name('product.list');
});


