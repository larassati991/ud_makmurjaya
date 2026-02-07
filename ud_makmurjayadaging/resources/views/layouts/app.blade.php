<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'UD Makmur Jaya Daging')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white border-b">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold">UDMJD</div>
                <div>
                    <div class="font-semibold text-lg text-green-800">UD Makmur Jaya Daging</div>
                    <div class="text-xs text-gray-600">Segar | Higienis | Terpercaya</div>
                </div>
            </a>

            <nav class="space-x-8 hidden md:flex">
                <a href="#products" class="text-gray-700 hover:text-green-600">Produk</a>
                <a href="#categories" class="text-gray-700 hover:text-green-600">Kategori</a>
                <a href="#contact" class="text-gray-700 hover:text-green-600">Kontak</a>
            </nav>

            <div class="flex items-center space-x-3">
                <a href="#contact" class="px-4 py-2 border border-green-600 text-green-600 rounded hover:bg-green-50">Hubungi</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-200 mt-16 py-8">
        <div class="container mx-auto px-4 text-center text-sm">
            &copy; {{ date('Y') }} UD Makmur Jaya Daging. All rights reserved.
        </div>
    </footer>
</body>
</html>
