# 🌐 Admin Panel Integration Guide - Frontend

## Menampilkan Produk dari Admin Panel di Website

Panduan ini menjelaskan bagaimana mengintegrasikan produk yang dikelola melalui admin panel ke tampilan website Anda.

---

## 📚 Konten Panduan

1. [Mengambil Data Produk](#mengambil-data-produk)
2. [Menampilkan di Halaman](#menampilkan-di-halaman)
3. [Contoh Implementasi](#contoh-implementasi)
4. [Styling & Layout](#styling--layout)
5. [Advanced Features](#advanced-features)

---

## Mengambil Data Produk

### 1. Query Semua Produk Aktif

**Di Controller:**
```php
<?php
namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua produk aktif
        $products = Product::where('is_active', true)
                            ->with('category')
                            ->paginate(12);
        
        return view('products.index', compact('products'));
    }
}
```

### 2. Query Produk Berdasarkan Kategori

```php
public function category($slug)
{
    // Ambil kategori
    $category = Category::where('slug', $slug)
                        ->where('is_active', true)
                        ->firstOrFail();
    
    // Ambil produk di kategori tersebut
    $products = Product::where('category_id', $category->id)
                       ->where('is_active', true)
                       ->paginate(12);
    
    return view('products.category', compact('category', 'products'));
}
```

### 3. Query Produk Spesifik

```php
public function show($slug)
{
    $product = Product::where('slug', $slug)
                      ->where('is_active', true)
                      ->with('category')
                      ->firstOrFail();
    
    return view('products.detail', compact('product'));
}
```

---

## Menampilkan di Halaman

### Halaman Katalog Produk

**resources/views/products/index.blade.php:**
```blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Katalog Produk</h1>
    
    <div class="products-grid">
        @forelse($products as $product)
            <div class="product-card">
                <div class="product-image">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             alt="{{ $product->name }}">
                    @else
                        <div class="no-image">Tidak ada gambar</div>
                    @endif
                </div>
                
                <div class="product-info">
                    <h3>{{ $product->name }}</h3>
                    
                    <p class="category">
                        {{ $product->category->name }}
                    </p>
                    
                    <p class="description">
                        {{ Str::limit($product->description, 100) }}
                    </p>
                    
                    <div class="price-weight">
                        <span class="price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                        @if($product->weight)
                            <span class="weight">
                                {{ $product->weight }} kg
                            </span>
                        @endif
                    </div>
                    
                    <a href="{{ route('products.show', $product->slug) }}" 
                       class="btn btn-primary">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <p>Tidak ada produk yang tersedia saat ini.</p>
            </div>
        @endforelse
    </div>
    
    <!-- Pagination -->
    <div class="pagination">
        {{ $products->links() }}
    </div>
</div>

<style>
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.product-card {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s;
}

.product-card:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}

.product-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: #f5f5f5;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-info {
    padding: 15px;
}

.product-info h3 {
    margin: 0 0 8px 0;
    font-size: 18px;
}

.category {
    color: #666;
    font-size: 13px;
    margin: 0 0 8px 0;
}

.description {
    color: #999;
    font-size: 13px;
    margin: 0 0 12px 0;
    line-height: 1.4;
}

.price-weight {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    padding-bottom: 12px;
    border-bottom: 1px solid #eee;
}

.price {
    font-size: 16px;
    font-weight: bold;
    color: #2c3e50;
}

.weight {
    font-size: 12px;
    color: #999;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    background: #667eea;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: all 0.3s;
}

.btn:hover {
    background: #5568d3;
}
</style>
@endsection
```

### Halaman Detail Produk

**resources/views/products/detail.blade.php:**
```blade
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="product-detail">
        <div class="product-image-large">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" 
                     alt="{{ $product->name }}">
            @endif
        </div>
        
        <div class="product-details">
            <a href="{{ route('products.category', $product->category->slug) }}" 
               class="breadcrumb">
                ← {{ $product->category->name }}
            </a>
            
            <h1>{{ $product->name }}</h1>
            
            <div class="meta">
                <span class="category-badge">
                    {{ $product->category->name }}
                </span>
            </div>
            
            <div class="price-section">
                <h2 class="price">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </h2>
                @if($product->weight)
                    <p class="weight">
                        Berat: {{ $product->weight }} kg
                    </p>
                @endif
            </div>
            
            <div class="description-section">
                <h3>Deskripsi Produk</h3>
                <p>{!! nl2br(e($product->description)) !!}</p>
            </div>
            
            <div class="action-buttons">
                <button class="btn btn-primary btn-lg">
                    💬 Hubungi Penjual
                </button>
                <a href="{{ route('products.index') }}" 
                   class="btn btn-secondary btn-lg">
                    ← Kembali ke Katalog
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.product-detail {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin: 40px 0;
}

.product-image-large {
    width: 100%;
    background: #f5f5f5;
    border-radius: 8px;
    overflow: hidden;
}

.product-image-large img {
    width: 100%;
    height: auto;
}

.breadcrumb {
    color: #667eea;
    text-decoration: none;
    font-size: 14px;
    display: inline-block;
    margin-bottom: 20px;
}

.product-details h1 {
    font-size: 28px;
    margin: 0 0 15px 0;
}

.meta {
    margin-bottom: 20px;
}

.category-badge {
    display: inline-block;
    background: #e8f0fe;
    color: #667eea;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.price-section {
    padding: 20px 0;
    border-bottom: 2px solid #eee;
    margin-bottom: 20px;
}

.price {
    font-size: 32px;
    color: #2c3e50;
    margin: 0;
}

.weight {
    color: #999;
    margin: 8px 0 0 0;
}

.description-section {
    margin-bottom: 30px;
}

.description-section h3 {
    color: #2c3e50;
    margin-bottom: 12px;
}

.description-section p {
    color: #666;
    line-height: 1.6;
}

.action-buttons {
    display: flex;
    gap: 12px;
}

.btn-lg {
    padding: 12px 24px;
    font-size: 16px;
}

@media (max-width: 768px) {
    .product-detail {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .action-buttons {
        flex-direction: column;
    }
}
</style>
@endsection
```

### Halaman Kategori Produk

**resources/views/products/category.blade.php:**
```blade
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="category-header">
        @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" 
                 alt="{{ $category->name }}"
                 class="category-banner">
        @endif
        
        <h1>{{ $category->name }}</h1>
        <p class="description">{{ $category->description }}</p>
    </div>
    
    <div class="products-grid">
        @forelse($products as $product)
            <div class="product-card">
                <div class="product-image">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             alt="{{ $product->name }}">
                    @endif
                </div>
                
                <div class="product-info">
                    <h3>{{ $product->name }}</h3>
                    <p class="description">
                        {{ Str::limit($product->description, 80) }}
                    </p>
                    
                    <div class="footer">
                        <span class="price">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                        <a href="{{ route('products.show', $product->slug) }}" 
                           class="btn-small">
                            Detail →
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="empty">
                Tidak ada produk di kategori ini.
            </p>
        @endforelse
    </div>
    
    {{ $products->links() }}
</div>
@endsection
```

---

## Contoh Implementasi

### Step 1: Update Routes

**routes/web.php:**
```php
// Existing routes
Route::get('/katalog-produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/katalog-produk/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');
```

### Step 2: Update Controller

**app/Http/Controllers/ProductController.php:**
```php
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::where('is_active', true)
                            ->with('category')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(12);
        
        return view('products.index', compact('products'));
    }
    
    // Tampilkan produk per kategori
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
                            ->where('is_active', true)
                            ->firstOrFail();
        
        $products = Product::where('category_id', $category->id)
                           ->where('is_active', true)
                           ->orderBy('order')
                           ->paginate(12);
        
        return view('products.category', compact('category', 'products'));
    }
    
    // Tampilkan detail produk
    public function show($slug)
    {
        $product = Product::where('slug', $slug)
                         ->where('is_active', true)
                         ->with('category')
                         ->firstOrFail();
        
        // Ambil produk lain dari kategori yang sama
        $related = Product::where('category_id', $product->category_id)
                         ->where('id', '!=', $product->id)
                         ->where('is_active', true)
                         ->limit(4)
                         ->get();
        
        return view('products.show', compact('product', 'related'));
    }
}
```

### Step 3: Create Views

Buat folder dan files:
```
resources/views/products/
├── index.blade.php
├── category.blade.php
└── show.blade.php
```

---

## Styling & Layout

### CSS untuk Product Grid

```css
/* Responsive Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}

@media (max-width: 768px) {
    .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .products-grid {
        grid-template-columns: 1fr;
    }
}

/* Product Card */
.product-card {
    border-radius: 8px;
    overflow: hidden;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.12);
}

.product-image {
    width: 100%;
    aspect-ratio: 1;
    overflow: hidden;
    background: #f5f5f5;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}
```

---

## Advanced Features

### 1. Filter Produk by Price

```blade
<div class="filters">
    <form action="{{ route('products.index') }}" method="GET">
        <input type="number" name="min_price" 
               placeholder="Min Harga" value="{{ request('min_price') }}">
        <input type="number" name="max_price" 
               placeholder="Max Harga" value="{{ request('max_price') }}">
        <button type="submit">Filter</button>
    </form>
</div>
```

**Controller:**
```php
public function index()
{
    $query = Product::where('is_active', true);
    
    if (request('min_price')) {
        $query->where('price', '>=', request('min_price'));
    }
    
    if (request('max_price')) {
        $query->where('price', '<=', request('max_price'));
    }
    
    $products = $query->paginate(12);
    return view('products.index', compact('products'));
}
```

### 2. Related Products

```blade
<div class="related-products">
    <h3>Produk Terkait</h3>
    <div class="grid">
        @foreach($related as $item)
            <!-- Product card -->
        @endforeach
    </div>
</div>
```

### 3. Recent Products Widget

```blade
@php
$recent = \App\Models\Product::where('is_active', true)
                              ->latest()
                              ->limit(6)
                              ->get();
@endphp

<div class="recent-products">
    @foreach($recent as $product)
        <a href="{{ route('products.show', $product->slug) }}" 
           class="recent-item">
            <img src="{{ asset('storage/' . $product->image) }}" />
            <div>
                <h4>{{ $product->name }}</h4>
                <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
        </a>
    @endforeach
</div>
```

---

## 💡 Tips

1. **Always use `asset('storage/...')` untuk display gambar**
2. **Selalu check `is_active` sebelum display produk**
3. **Gunakan eager loading dengan `with('category')`**
4. **Optimize queries dengan pagination**
5. **Cache untuk high-traffic sites**

---

## 🎯 Checklist Integrasi

- [ ] Update routes di `routes/web.php`
- [ ] Update ProductController
- [ ] Buat views folder dan files
- [ ] Test query di tinker
- [ ] Style dengan CSS
- [ ] Test filter & pagination
- [ ] Test image display
- [ ] Test responsiveness
- [ ] Deploy & go live!

---

**Happy coding! 🚀**

Untuk pertanyaan lebih lanjut, lihat dokumentasi lengkap di `ADMIN_PANEL_COMPLETE_DOCS.md`
