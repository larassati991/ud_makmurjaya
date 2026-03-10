<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('order')
            ->withCount(['products' => function($query) {
                $query->where('is_active', true);
            }])
            ->with(['products' => function($query) {
                $query->where('is_active', true)->orderBy('order');
            }])
            ->get();
            
        return view('products.index', compact('categories'));
    }
    
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
            
        $products = Product::where('category_id', $category->id)
            ->where('is_active', true)
            ->orderBy('order')
            ->paginate(12);
            
        $categories = Category::where('is_active', true)
            ->orderBy('order')
            ->get();
            
        return view('products.category', compact('category', 'products', 'categories'));
    }
}