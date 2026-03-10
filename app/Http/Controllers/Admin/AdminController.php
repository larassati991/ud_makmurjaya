<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Testimonial;

class AdminController extends Controller
{
    public function __construct()
    {
        if (!session()->get('admin_authenticated')) {
            redirect()->route('admin.login')->send();
            exit;
        }
    }

    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $activeProducts = Product::where('is_active', true)->count();
        $activeCategories = Category::where('is_active', true)->count();
        $totalTestimonials = Testimonial::count();
        $activeTestimonials = Testimonial::where('is_active', true)->count();

        return view('admin.dashboard', compact('totalProducts', 'totalCategories', 'activeProducts', 'activeCategories', 'totalTestimonials', 'activeTestimonials'));
    }
}

