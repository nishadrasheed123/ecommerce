<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('admin/do-login', [LoginController::class, 'doLogin'])->name('doLogin');
    // Route::post('/admin/do-login', [LoginController::class, 'doLogin'])->name('admin.doLogin');
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});


Route::name('product.')->prefix('admin/products')->group(function () {
    // Product List
    Route::get('/', [ProductController::class, 'list'])->name('list');

    // Create New Product
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('save', [ProductController::class, 'save'])->name('save');

    // Edit Product
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('update');

    // Delete Product
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});




