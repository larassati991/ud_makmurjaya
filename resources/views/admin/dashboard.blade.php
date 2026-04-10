@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<!-- Welcome Card -->
<div class="card">
    <div class="card-header">
        <div>
            <h2>🎯 Dashboard Admin - Selamat Datang Kembali</h2>
            <p style="margin:8px 0 0;color:#6b5b5b;font-size:14px">Kelola semua konten website UD Makmur Jaya dalam satu tempat. Semua perubahan ditampilkan langsung ke pengunjung.</p>
        </div>
    </div>
    <div style="display:flex;gap:16px;flex-wrap:wrap">
        <div style="flex:1;min-width:200px;padding:12px;background:rgba(220,38,38,0.04);border-radius:10px;border-left:4px solid #dc2626">
            <small style="color:#7f1d1d;margin:0">💡 Pro Tip</small>
            <p style="margin:6px 0 0;font-size:13px;color:#2f1f1f">Edit pengaturan untuk mengubah teks, kontak, maps, dan info perusahaan di halaman website.</p>
        </div>
    </div>
</div>

<!-- Statistics Grid -->
<div style="margin-bottom:24px">
    <h3 style="margin:0 0 16px;font-size:16px;color:#2f1f1f;font-weight:700;text-transform:uppercase;letter-spacing:0.5px;opacity:0.8">📊 Statistik Konten</h3>
    <div class="stats">
        <div class="stat-card">
            <h3>📦 Total Produk</h3>
            <div class="number">{{ $totalProducts }}</div>
            <small style="text-align:center;margin-top:8px">{{ $activeProducts }} aktif</small>
        </div>
        <div class="stat-card">
            <h3>🏷️ Total Kategori</h3>
            <div class="number">{{ $totalCategories }}</div>
            <small style="text-align:center;margin-top:8px">{{ $activeCategories }} aktif</small>
        </div>
        <div class="stat-card">
            <h3>💬 Total Testimoni</h3>
            <div class="number">{{ $totalTestimonials }}</div>
            <small style="text-align:center;margin-top:8px">{{ $activeTestimonials }} aktif</small>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="card">
    <div class="card-header">
        <h2>⚡ Aksi Cepat</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:14px">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="display:flex;justify-content:center;align-items:center;min-height:68px;text-align:center;font-size:15px;gap:8px">
            <span>➕</span> <span>Tambah Produk</span>
        </a>
        <a href="{{ route('admin.categories.create') }}" class="btn" style="display:flex;justify-content:center;align-items:center;min-height:68px;text-align:center;font-size:15px;gap:8px;background:#8b7355;color:white;text-decoration:none;border-radius:10px;font-weight:600">
            <span>➕</span> <span>Tambah Kategori</span>
        </a>
        <a href="{{ route('admin.testimonials.create') }}" class="btn" style="display:flex;justify-content:center;align-items:center;min-height:68px;text-align:center;font-size:15px;gap:8px;background:#0891b2;color:white;text-decoration:none;border-radius:10px;font-weight:600">
            <span>➕</span> <span>Tambah Testimoni</span>
        </a>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-success" style="display:flex;justify-content:center;align-items:center;min-height:68px;text-align:center;font-size:15px;gap:8px">
            <span>⚙️</span> <span>Pengaturan Website</span>
        </a>
    </div>
</div>

<!-- Recent Products -->
@php
$recentProducts = App\Models\Product::latest()->take(5)->get();
@endphp
@if($recentProducts->count() > 0)
<div class="card">
    <div class="card-header">
        <div>
            <h2>🆕 Produk Terbaru</h2>
            <small style="color:#6b5b5b;margin:0">5 produk terakhir yang ditambahkan</small>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn btn-sm" style="background:#6c757d;color:white;text-decoration:none;border-radius:6px;padding:6px 12px">Lihat Semua →</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status</th>
                <th style="text-align:center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentProducts as $product)
            <tr>
                <td>
                    <strong>{{ $product->name }}</strong>
                </td>
                <td>{{ $product->category->name ?? 'N/A' }}</td>
                <td><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></td>
                <td>
                    <span style="display:inline-block;padding:4px 10px;border-radius:6px;font-size:12px;font-weight:600;background:{{ $product->is_active ? 'rgba(34,197,94,0.15)' : 'rgba(107,107,107,0.15)' }};color:{{ $product->is_active ? '#186e25' : '#575757' }}">
                        {{ $product->is_active ? '✓ Aktif' : '○ Nonaktif' }}
                    </span>
                </td>
                <td style="text-align:center">
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm" style="background:#0284c7;color:white;text-decoration:none;border-radius:4px;padding:4px 8px;font-size:12px">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

<!-- System Information -->
<div class="card">
    <div class="card-header">
        <h2>ℹ️ Informasi Sistem</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:16px">
        <div style="padding:12px;background:rgba(220,38,38,0.04);border-radius:10px;border-left:3px solid #dc2626">
            <small style="color:#7f1d1d;font-weight:600;margin:0;display:block">Laravel Version</small>
            <p style="margin:4px 0 0;font-size:14px;color:#2f1f1f">{{ app()->version() }}</p>
        </div>
        <div style="padding:12px;background:rgba(2,132,199,0.04);border-radius:10px;border-left:3px solid #0284c7">
            <small style="color:#0c4a6e;font-weight:600;margin:0;display:block">Database</small>
            <p style="margin:4px 0 0;font-size:14px;color:#2f1f1f">{{ config('database.default') }}</p>
        </div>
        <div style="padding:12px;background:rgba(139,115,85,0.04);border-radius:10px;border-left:3px solid #8b7355">
            <small style="color:#654321;font-weight:600;margin:0;display:block">Environment</small>
            <p style="margin:4px 0 0;font-size:14px;color:#2f1f1f;text-transform:uppercase">{{ app()->environment() }}</p>
        </div>
    </div>
</div>
@endsection
