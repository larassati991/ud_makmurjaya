@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="stats">
    <div class="stat-card">
        <h3>Total Produk</h3>
        <div class="number">{{ $totalProducts }}</div>
    </div>
    <div class="stat-card">
        <h3>Produk Aktif</h3>
        <div class="number">{{ $activeProducts }}</div>
    </div>
    <div class="stat-card">
        <h3>Total Kategori</h3>
        <div class="number">{{ $totalCategories }}</div>
    </div>
    <div class="stat-card">
        <h3>Kategori Aktif</h3>
        <div class="number">{{ $activeCategories }}</div>
    </div>
    <div class="stat-card">
        <h3>Total Testimoni</h3>
        <div class="number">{{ $totalTestimonials }}</div>
    </div>
    <div class="stat-card">
        <h3>Testimoni Aktif</h3>
        <div class="number">{{ $activeTestimonials }}</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>🎉 Selamat Datang di Admin Panel</h2>
    </div>
    <p style="margin-bottom:16px">Gunakan menu di sebelah kiri untuk mengelola website <strong>UD Makmur Jaya</strong>. Semua perubahan langsung tampil di website.</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin-top:20px">
        <a href="{{ route('admin.categories.create') }}" style="background:#6B3434;color:white;padding:16px;border-radius:10px;text-decoration:none;text-align:center;display:block">
            <div style="font-size:28px;margin-bottom:8px">📁</div>
            <strong>Tambah Kategori</strong>
        </a>
        <a href="{{ route('admin.products.create') }}" style="background:#e55a2b;color:white;padding:16px;border-radius:10px;text-decoration:none;text-align:center;display:block">
            <div style="font-size:28px;margin-bottom:8px">🛍️</div>
            <strong>Tambah Produk</strong>
        </a>
        <a href="{{ route('admin.testimonials.create') }}" style="background:#2563eb;color:white;padding:16px;border-radius:10px;text-decoration:none;text-align:center;display:block">
            <div style="font-size:28px;margin-bottom:8px">💬</div>
            <strong>Tambah Testimoni</strong>
        </a>
        <a href="{{ route('admin.settings.index') }}" style="background:#059669;color:white;padding:16px;border-radius:10px;text-decoration:none;text-align:center;display:block">
            <div style="font-size:28px;margin-bottom:8px">⚙️</div>
            <strong>Pengaturan Website</strong>
        </a>
    </div>
</div>
@endsection
