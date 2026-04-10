@extends('admin.layout')
@section('title', 'Kelola Produk')
@section('content')
<div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1 style="margin: 0; font-size: 28px; font-weight: 700; color: #333;">Kelola Produk</h1>
            <p style="margin: 5px 0 0 0; color: #666; font-size: 14px;">Tambah, edit, atau hapus produk katalog</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn-create" style="background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%); color: white; padding: 12px 24px; border-radius: 10px; text-decoration: none; font-weight: 700; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s; box-shadow: 0 12px 24px rgba(127, 29, 29, 0.18);">
            <span style="font-size: 18px;">+</span> Tambah Produk
        </a>
    </div>

    <!-- Filter Kategori -->
    <div style="padding: 15px 20px; background: #f8f9fa; border-radius: 8px; margin-bottom: 25px; display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
        <label for="filter_category" style="font-weight: 600; color: #333; white-space: nowrap;">📁 Filter Kategori:</label>
        <form method="GET" action="{{ route('admin.products.index') }}" style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
            <select name="category_id" id="filter_category" onchange="this.form.submit()" style="padding: 10px 15px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; min-width: 200px;">
                <option value="">-- Semua Kategori --</option>
                @foreach ($allCategories as $cat)
                    <option value="{{ $cat->id }}" @if(request('category_id') == $cat->id) selected @endif>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </form>
        @if(request('category_id'))
            <a href="{{ route('admin.products.index') }}" style="background: #6c757d; color: white; padding: 10px 15px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600;">✕ Reset</a>
        @endif
    </div>

    @if (isset($products) && $products->count() > 0)
        <!-- Products Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px;">
            @foreach ($products as $product)
            <div class="product-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s; border: 1px solid #e9ecef;">
                <!-- Product Image -->
                <div style="position: relative; overflow: hidden; height: 200px; background: #f5f5f5;">
                    @if ($product && $product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                        <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #7f1d1d 0%, #dc2626 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 60px; font-weight: bold;">
                            {{ substr($product->name, 0, 1) }}
                        </div>
                    @endif
                    
                    <!-- Status Badge -->
                    <div style="position: absolute; top: 10px; right: 10px;">
                        <span style="display: inline-block; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 700; @if($product && $product->is_active) background: #d4edda; color: #155724; @else background: #f8d7da; color: #721c24; @endif">
                            @if($product && $product->is_active) ✓ AKTIF @else ✗ NONAKTIF @endif
                        </span>
                    </div>
                </div>

                <!-- Product Info -->
                <div style="padding: 15px;">
                    <!-- Kategori Badge -->
                    <div style="margin-bottom: 10px;">
                        <span style="display: inline-block; background: #e3f2fd; color: #1976d2; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 600;">
                            {{ ($product && $product->category) ? $product->category->name : 'Tidak Ada' }}
                        </span>
                    </div>

                    <!-- Nama Produk -->
                    <h3 style="margin: 0 0 8px 0; font-size: 16px; font-weight: 700; color: #333; min-height: 40px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ $product->name }}
                    </h3>

                    <!-- Harga -->
                    <div style="margin: 12px 0; padding-top: 12px; border-top: 1px solid #eee;">
                        <p style="margin: 0; font-size: 13px; color: #666;">💰 Harga</p>
                        <p style="margin: 5px 0 0 0; font-size: 18px; font-weight: 700; color: #28a745;">
                            Rp {{ $product && $product->price ? number_format($product->price, 0, ',', '.') : '0' }}
                        </p>
                    </div>

                    <!-- Berat -->
                    @if($product && $product->weight)
                    <p style="margin: 8px 0; font-size: 13px; color: #666;">
                        ⚖️ Berat: <strong>{{ $product->weight }} kg</strong>
                    </p>
                    @endif

                    <!-- Deskripsi Preview -->
                    @if($product->description)
                    <p style="margin: 8px 0; font-size: 12px; color: #999; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ substr($product->description, 0, 60) }}{{ strlen($product->description) > 60 ? '...' : '' }}
                    </p>
                    @endif

                    <!-- Action Buttons -->
                    <div style="margin-top: 15px; display: flex; gap: 8px; padding-top: 15px; border-top: 1px solid #eee; flex-wrap:wrap;">
                        <!-- Toggle Status -->
                        <form action="{{ route('admin.products.toggle', $product->id) }}" method="POST" style="flex:1;">
                            @csrf
                            <button type="submit" style="width:100%;padding:8px 10px;border-radius:6px;border:none;font-size:12px;font-weight:600;cursor:pointer;transition:all 0.2s;{{ ($product && $product->is_active) ? 'background:#d4edda;color:#155724;' : 'background:#f8d7da;color:#721c24;' }}">
                                {{ ($product && $product->is_active) ? '✓ Aktif' : '✗ Nonaktif' }}
                            </button>
                        </form>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn-action" style="flex: 1; background: #ffc107; color: #333; padding: 10px 12px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; text-align: center; transition: all 0.2s;">
                            ✎ Edit
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="flex: 1;" onsubmit="return confirm('Hapus produk \'{{ addslashes($product->name) }}\'?\nTindakan ini tidak bisa dibatalkan!');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action" style="width: 100%; background: #dc3545; color: white; padding: 10px 12px; border-radius: 6px; border: none; font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s;">
                                🗑 Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div style="display: flex; justify-content: center; margin-top: 30px;">
            {{ $products->links() }}
        </div>

    @else
        <!-- Empty State -->
        <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 10px;">
            <div style="font-size: 48px; margin-bottom: 15px;">📦</div>
            <h3 style="margin: 0 0 10px 0; font-size: 20px; font-weight: 700; color: #333;">
                @if(request('category_id'))
                    Tidak Ada Produk di Kategori Ini
                @else
                    Belum Ada Produk
                @endif
            </h3>
            <p style="margin: 0 0 20px 0; color: #666; font-size: 14px;">
                @if(request('category_id'))
                    Tambahkan produk pertama atau coba kategori lain
                @else
                    Mulai tambahkan produk baru untuk katalog Anda
                @endif
            </p>
            <a href="{{ route('admin.products.create') }}" style="display: inline-block; background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%); color: white; padding: 12px 24px; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s; box-shadow: 0 12px 24px rgba(127, 29, 29, 0.18);">
                + Tambah Produk
            </a>
        </div>
    @endif
</div>

<style>
    .product-card:hover {
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        transform: translateY(-4px);
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .btn-create:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    @media (max-width: 768px) {
        div[style*="grid-template-columns"] {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
        }
    }
</style>
@endsection
