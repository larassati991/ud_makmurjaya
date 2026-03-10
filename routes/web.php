<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');

// Products
Route::get('/katalog-produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/katalog-produk/{slug}', [ProductController::class, 'category'])->name('products.category');

// Contact
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('contact');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth Routes (no auth check)
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login']);
    Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    
    // Protected Routes - auth check will be done in controllers
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', AdminProductController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('testimonials', AdminTestimonialController::class);

    // Toggle active status
    Route::post('/products/{product}/toggle', [AdminProductController::class, 'toggle'])->name('products.toggle');
    Route::post('/categories/{category}/toggle', [AdminCategoryController::class, 'toggle'])->name('categories.toggle');
    Route::post('/testimonials/{testimonial}/toggle', [AdminTestimonialController::class, 'toggle'])->name('testimonials.toggle');

    // Settings
    Route::get('/settings', [AdminSettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [AdminSettingController::class, 'update'])->name('settings.update');
});
