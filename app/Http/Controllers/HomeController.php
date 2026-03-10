<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('order')
            ->withCount('products')
            ->get();
            
        $testimonials = Testimonial::where('is_active', true)
            ->latest()
            ->take(6)
            ->get();
            
        return view('home', compact('categories', 'testimonials'));
    }
}