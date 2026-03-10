<header id="main-header" class="sticky top-0 z-50 shadow-lg" x-data="{ mobileMenuOpen: false, dropdownOpen: false }">
    <!-- Background layer - gradient at top, fades to blur on scroll -->
    <div id="header-bg" class="absolute inset-0 bg-gradient-to-r from-[#C0392B] to-[#96281B] transition-opacity duration-300"></div>
    <div id="header-blur" class="absolute inset-0 opacity-0 transition-opacity duration-300" style="backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); background: rgba(20,20,20,0.55);"></div>

    <nav class="container mx-auto px-4 py-3 relative z-10">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="UD. Makmur Jaya Ulum Daging" class="h-14 w-auto drop-shadow-lg">
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" 
                   class="text-white hover:bg-white/10 px-5 py-2 rounded-md font-medium transition text-[15px] {{ request()->routeIs('home') ? 'bg-white/20' : '' }}">
                    Beranda
                </a>
                
                <!-- Tentang Kami Dropdown -->
                <div class="relative" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="text-white hover:bg-white/10 px-5 py-2 rounded-md font-medium transition flex items-center text-[15px] {{ request()->routeIs('about') ? 'bg-white/20' : '' }}">
                        Tentang Kami
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div x-show="dropdownOpen" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-xl py-1 z-50"
                         style="display: none;">
                        <a href="{{ route('about') }}" 
                           class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#C0392B] transition">
                            Profile Perusahaan
                        </a>
                    </div>
                </div>
                
                <a href="{{ route('products.index') }}" 
                   class="text-white hover:bg-white/10 px-5 py-2 rounded-md font-medium transition text-[15px] {{ request()->routeIs('products.*') ? 'bg-white/20' : '' }}">
                    Katalog Produk
                </a>
                
                <a href="{{ route('contact') }}" 
                   class="text-white hover:bg-white/10 px-5 py-2 rounded-md font-medium transition text-[15px] {{ request()->routeIs('contact') ? 'bg-white/20' : '' }}">
                    Hubungi Kami
                </a>
            </div>
            
            
            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             @click.away="mobileMenuOpen = false"
             class="lg:hidden mt-4 pb-4 border-t border-white/20 pt-4"
             style="display: none;">
            
            
            <a href="{{ route('home') }}" 
               class="block py-2.5 px-4 text-white hover:bg-white/10 rounded-md mb-1 {{ request()->routeIs('home') ? 'bg-white/20' : '' }}">
                Beranda
            </a>
            
            <!-- Mobile Tentang Kami -->
            <div class="mb-1">
                <button @click="dropdownOpen = !dropdownOpen" 
                        class="w-full flex items-center justify-between py-2.5 px-4 text-white hover:bg-white/10 rounded-md {{ request()->routeIs('about') ? 'bg-white/20' : '' }}">
                    <span>Tentang Kami</span>
                    <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': dropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="dropdownOpen" 
                     x-transition
                     class="mt-1 ml-4 space-y-1"
                     style="display: none;">
                    <a href="{{ route('about') }}" class="block py-2 px-4 text-white/90 hover:bg-white/10 rounded-md text-sm">
                        Profile Perusahaan
                    </a>
                    <a href="#" class="block py-2 px-4 text-white/90 hover:bg-white/10 rounded-md text-sm">
                        Karir
                    </a>
                </div>
            </div>
            
            <a href="{{ route('products.index') }}" 
               class="block py-2.5 px-4 text-white hover:bg-white/10 rounded-md mb-1 {{ request()->routeIs('products.*') ? 'bg-white/20' : '' }}">
                Katalog Produk
            </a>
            
            <a href="{{ route('contact') }}" 
               class="block py-2.5 px-4 text-white hover:bg-white/10 rounded-md {{ request()->routeIs('contact') ? 'bg-white/20' : '' }}">
                Hubungi Kami
            </a>
        </div>
    </nav>
</header>

<script>
    (function () {
        var headerBg   = document.getElementById('header-bg');
        var headerBlur = document.getElementById('header-blur');
        function onScroll() {
            if (window.scrollY > 60) {
                headerBg.style.opacity   = '0';
                headerBlur.style.opacity = '1';
            } else {
                headerBg.style.opacity   = '1';
                headerBlur.style.opacity = '0';
            }
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
</script>