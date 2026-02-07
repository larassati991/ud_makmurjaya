@extends('layouts.app')

@section('title', 'Beranda - UD Makmur Jaya Daging')

@section('content')
<!-- Top banner / header -->
<section class="bg-green-600 text-white">
    <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row items-center justify-between">
        <div class="text-center md:text-left">
            <div class="text-sm font-medium">Siap suplai daging ke seluruh Indonesia</div>
            <div class="text-xs mt-1 opacity-90">Dipercaya mitra aktif</div>
        </div>
        <div class="mt-3 md:mt-0">
            <a href="#contact" class="inline-block bg-white text-green-600 px-4 py-2 rounded font-medium hover:bg-gray-100">Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- Hero -->
<section class="container mx-auto px-4 py-12 grid md:grid-cols-2 gap-8 items-center">
    <div>
        <h1 class="text-3xl md:text-4xl font-bold text-green-800">UD Makmur Jaya Daging</h1>
        <p class="mt-3 text-gray-700">Penyedia daging segar dan olahan untuk kebutuhan bisnis kuliner Anda — terpercaya, higienis, dan siap kirim ke seluruh Indonesia.</p>
        <div class="mt-6 flex gap-3">
            <a href="#products" class="px-5 py-3 bg-green-600 text-white rounded hover:bg-green-700">Lihat Produk</a>
            <a href="#categories" class="px-5 py-3 border border-green-600 text-green-600 rounded hover:bg-green-50">Kategori</a>
        </div>
    </div>
    <div class="order-first md:order-last">
        <img src="https://via.placeholder.com/800x520?text=UD+Makmur+Jaya+Daging" alt="hero" class="w-full rounded shadow-md">
    </div>
</section>

<!-- Komitmen -->
<section class="bg-white py-10 border-t border-b">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold text-green-800">Komitmen kami</h2>
        <p class="mt-3 text-gray-600">Berkomitmen menjadi supplier daging terbaik bisnis kuliner. UD MAKMUR JAYA DAGING menyediakan berbagai pilihan daging lokal dan impor.</p>
    </div>
</section>

<!-- Partners -->
<section class="container mx-auto px-4 py-10">
    <h3 class="text-xl font-semibold text-green-800 mb-4">Dipercaya beberapa mitra aktif</h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
        @foreach($partners as $p)
            <div class="bg-green-50 border border-green-200 rounded p-4 text-center">
                <div class="text-sm font-medium text-green-700">{{ $p }}</div>
            </div>
        @endforeach
    </div>
</section>

<!-- Categories -->
<section id="categories" class="bg-gray-50 py-8 border-t border-b">
    <div class="container mx-auto px-4">
        <h3 class="text-xl font-semibold text-green-800 mb-4">Kategori Produk</h3>
        <div class="flex flex-wrap gap-3">
            @foreach($categories as $cat)
                <button class="px-4 py-2 bg-white border border-green-300 rounded text-green-700 shadow-sm hover:shadow-md">{{ $cat['name'] }}</button>
            @endforeach
        </div>
    </div>
</section>

<!-- Products -->
<section id="products" class="container mx-auto px-4 py-12">
    <h3 class="text-2xl font-semibold text-green-800 mb-6">Produk UD Makmur Jaya Daging</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $p)
            <div class="bg-white rounded shadow overflow-hidden hover:shadow-lg transition">
                <img src="{{ $p['image'] }}" alt="{{ $p['title'] }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="font-semibold text-gray-800">{{ $p['title'] }}</div>
                    <div class="text-green-700 font-bold mt-2">{{ $p['price'] }}</div>
                    <div class="mt-4 flex gap-2">
                        <a href="#" class="flex-1 px-3 py-2 bg-green-600 text-white rounded text-center hover:bg-green-700">Beli</a>
                        <a href="#" class="flex-1 px-3 py-2 border border-green-600 text-green-600 rounded text-center hover:bg-green-50">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Testimonials -->
<section class="bg-white py-12 border-t border-b">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-semibold text-green-800">Apa kata klien kami?</h3>
        <p class="text-gray-600 mt-1">Cerita nyata dari pemilik usaha seperti anda</p>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-4 border rounded">
                <div class="font-medium">Restoran Ayam Goreng</div>
                <div class="text-sm text-gray-600 mt-2">"Kualitas daging selalu konsisten, pengiriman tepat waktu, dan layanan support yang responsif."</div>
            </div>
            <div class="p-4 border rounded">
                <div class="font-medium">Catering Nusantara</div>
                <div class="text-sm text-gray-600 mt-2">"Pilihan produk lengkap mulai dari sapi hingga kambing. Harga kompetitif untuk volume besar."</div>
            </div>
            <div class="p-4 border rounded">
                <div class="font-medium">Warung Makan Rakyat</div>
                <div class="text-sm text-gray-600 mt-2">"Membantu skala usaha kuliner kami dengan pasokan stabil dan variasi produk yang luas."</div>
            </div>
        </div>
    </div>
</section>

<!-- Tanya Toko + WhatsApp -->
<section id="contact" class="bg-green-50 py-10 border-t border-b">
    <div class="container mx-auto px-4">
        <h3 class="text-xl font-semibold text-green-800 mb-3">Tanya Toko</h3>
        <p class="text-gray-600 mb-4">Untuk pertanyaan seputar produk, stok, atau pemesanan, hubungi kami via WhatsApp.</p>
        <a href="https://wa.me/{{ $whatsapp }}" target="_blank" class="inline-flex items-center gap-2 px-5 py-3 bg-green-600 text-white rounded hover:bg-green-700">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.8 11.8 0 0012 0C5.37 0 .09 5.26.09 11.9a11.6 11.6 0 001.6 5.7L0 24l6.56-1.7a11.88 11.88 0 005.44 1.27h.02c6.63 0 11.91-5.26 11.91-11.9 0-3.18-1.24-6.17-3.51-8.37zM12 21.6a9.5 9.5 0 01-4.84-1.36l-.35-.21-3.9 1.01 1.04-3.8-.22-.38A9.46 9.46 0 012.6 11.9 9.42 9.42 0 1112 21.6z"/><path d="M17.36 14.22l-1.94-.56a.94.94 0 00-1.02.27l-.72.88a7.47 7.47 0 01-3.56-3.13l.9-.73a.95.95 0 00.28-1.02L9.7 6.56A.95.95 0 008.74 6H6.02a.95.95 0 00-.96.95 6.52 6.52 0 006.5 6.5c.45 0 .89-.05 1.32-.15l.9.14a.95.95 0 00.9-.92v-1.8a.95.95 0 00-.32-.72z"/></svg>
            Chat WhatsApp
        </a>
    </div>
</section>

<!-- Footer / Contact points -->
<footer class="bg-white py-10">
    <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8">
        <div>
            <h4 class="font-semibold text-green-800">Prakata - toko ud makmur jaya daging</h4>
            <p class="text-gray-600 mt-2">Kami siap bantu:</p>
            <ul class="mt-3 space-y-2 text-gray-700">
                @foreach($contactPoints as $c)
                    <li>• {{ $c }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-green-800">Layanan Customer</h4>
            <p class="mt-2 text-gray-700">Nomor HP: <strong>0812-xxxx-xxxx</strong></p>
            <p class="mt-1 text-gray-700">Nomor HP: <strong>0813-xxxx-xxxx</strong></p>
            <p class="mt-3 text-gray-600 text-sm">Jam operasional: 08:00 - 17:00 (Senin-Sabtu)</p>
        </div>

        <div>
            <h4 class="font-semibold text-green-800">Alamat & Maps</h4>
            <p class="mt-2 text-gray-700">Jalan Contoh No.1</p>
            <p class="text-gray-700">Kota/Kabupaten, Provinsi</p>
            <div class="mt-4">
                <a href="https://wa.me/{{ $whatsapp }}" target="_blank" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Hubungi via WhatsApp</a>
            </div>
        </div>
    </div>

    <div class="bg-green-600 text-white text-center text-sm py-4 mt-8">
        &copy; {{ date('Y') }} UD Makmur Jaya Daging. All rights reserved.
    </div>
</footer>
@endsection
