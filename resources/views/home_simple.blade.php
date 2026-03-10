<!DOCTYPE html>
<html>
<head>
    <title>UD MAKMUR JAYA DAGING</title>
</head>
<body style="font-family: Arial; margin: 40px;">
    <h1>UD MAKMUR JAYA DAGING</h1>
    <p>Siap Suplai Daging ke Seluruh Indonesia</p>
    
    <h2>Kategori Produk:</h2>
    @forelse($categories as $category)
        <div style="margin: 10px 0; padding: 10px; border: 1px solid #ddd;">
            <h3>{{ $category->name }}</h3>
            <p>{{ $category->description }}</p>
            <p><a href="{{ route('products.category', $category->slug) }}">Lihat Produk</a></p>
        </div>
    @empty
        <p>Tidak ada kategori</p>
    @endforelse
</body>
</html>
