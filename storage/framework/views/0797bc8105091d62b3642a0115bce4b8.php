

<?php $__env->startSection('title', 'UD MAKMUR JAYA DAGING - Siap Suplai Daging ke Seluruh Indonesia'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    @keyframes panImage {
        0%   { object-position: center top; }
        45%  { object-position: center bottom; }
        55%  { object-position: center bottom; }
        100% { object-position: center top; }
    }
    .img-pan {
        animation: panImage 10s ease-in-out infinite;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section with Background Image -->
<section class="relative h-screen min-h-[600px] flex items-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo e(asset('images/homepage.jpg')); ?>"
             alt="Daging Berkualitas"
             class="w-full h-full object-cover">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Siap Suplai Daging ke<br>Seluruh Nusantara
            </h1>
            <p class="text-xl md:text-2xl text-white/90 mb-8">
                3000+ Mitra Aktif dari hotel, café, restoran, dll.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo e(route('products.index')); ?>" 
                   class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-4 rounded-lg transition transform hover:scale-105 shadow-lg">
                    Cek Katalog Produk
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Komitmen Kami -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-[#6B3434] mb-4">Komitmen Kami untuk Bisnis HORECA</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Berkomitmen menjadi supplier daging terbaik bisnis kuliner Indonesia.<br>
                <strong class="text-[#6B3434]"><?php echo e(App\Models\Setting::get('company_name')); ?></strong> menyediakan berbagai pilihan daging lokal dan impor.
            </p>
        </div>
        
        <!-- Tab Content with Animation -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" x-data="{ activeTab: 'halal' }">
            
            <!-- Left Side - Tabs -->
            <div class="space-y-4">
                
                <!-- Tab 1: Tersertifikat Halal -->
                <div @click="activeTab = activeTab === 'halal' ? '' : 'halal'" 
                     class="cursor-pointer">
                    <div class="flex items-start p-6 rounded-xl transition-all duration-500 ease-in-out"
                         :class="activeTab === 'halal' ? 'bg-[#6B3434] text-white shadow-lg' : 'bg-white text-gray-800 hover:shadow-lg shadow-md'">
                        <div class="flex-shrink-0 mr-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-500 ease-in-out"
                                 :class="activeTab === 'halal' ? 'bg-white/20' : 'bg-[#6B3434]/10'">
                                <svg class="w-6 h-6" :class="activeTab === 'halal' ? 'text-white' : 'text-[#6B3434]'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold flex items-center"
                                :class="activeTab === 'halal' ? 'mb-3' : 'mb-0'">
                                Tersertifikat Halal
                                <svg class="w-5 h-5 ml-auto transition-transform duration-300"
                                     :class="activeTab === 'halal' ? 'rotate-180' : 'rotate-0'"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <div x-show="activeTab === 'halal'"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2">
                                <p class="text-sm leading-relaxed text-white/90">
                                    Diproses sesuai syariat Islam dan telah memiliki sertifikasi halal resmi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 2: Standar Higienis -->
                <div @click="activeTab = activeTab === 'higienis' ? '' : 'higienis'" 
                     class="cursor-pointer">
                    <div class="flex items-start p-6 rounded-xl transition-all duration-500 ease-in-out"
                         :class="activeTab === 'higienis' ? 'bg-[#6B3434] text-white shadow-lg' : 'bg-white text-gray-800 hover:shadow-lg shadow-md'">
                        <div class="flex-shrink-0 mr-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-500 ease-in-out"
                                 :class="activeTab === 'higienis' ? 'bg-white/20' : 'bg-[#6B3434]/10'">
                                <svg class="w-6 h-6" :class="activeTab === 'higienis' ? 'text-white' : 'text-[#6B3434]'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold flex items-center"
                                :class="activeTab === 'higienis' ? 'mb-3' : 'mb-0'">
                                Standar Higienis
                                <svg class="w-5 h-5 ml-auto transition-transform duration-300"
                                     :class="activeTab === 'higienis' ? 'rotate-180' : 'rotate-0'"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <div x-show="activeTab === 'higienis'"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2">
                                <ul class="text-sm leading-relaxed space-y-1 list-none text-white/90">
                                    <li>• Daging diambil dari rumah pemotongan hewan (RPH) yang resmi dan terkontrol.</li>
                                    <li>• Proses penyimpanan menggunakan suhu dingin yang sesuai untuk menjaga kesegaran daging.</li>
                                    <li>• Peralatan pemotongan dan pengemasan dibersihkan serta disterilkan secara rutin.</li>
                                    <li>• Daging dikemas dengan higienis untuk menjaga kualitas dan kebersihan produk.</li>
                                    <li>• Proses penanganan daging dilakukan oleh tenaga yang menjaga kebersihan dan menggunakan perlengkapan higienis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 3: Cold Supply Chain -->
                <div @click="activeTab = activeTab === 'cold' ? '' : 'cold'" 
                     class="cursor-pointer">
                    <div class="flex items-start p-6 rounded-xl transition-all duration-500 ease-in-out"
                         :class="activeTab === 'cold' ? 'bg-[#6B3434] text-white shadow-lg' : 'bg-white text-gray-800 hover:shadow-lg shadow-md'">
                        <div class="flex-shrink-0 mr-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center transition-all duration-500 ease-in-out"
                                 :class="activeTab === 'cold' ? 'bg-white/20' : 'bg-[#6B3434]/10'">
                                <svg class="w-6 h-6" :class="activeTab === 'cold' ? 'text-white' : 'text-[#6B3434]'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold flex items-center"
                                :class="activeTab === 'cold' ? 'mb-3' : 'mb-0'">
                                Cold Supply Chain
                                <svg class="w-5 h-5 ml-auto transition-transform duration-300"
                                     :class="activeTab === 'cold' ? 'rotate-180' : 'rotate-0'"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <div x-show="activeTab === 'cold'"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2">
                                <p class="text-sm leading-relaxed text-white/90">
                                    Kesegaran daging terjaga dengan rantai pasokan dingin, dipertahankan pada suhu -18°C hingga sampai ke tangan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Right Side - Image with Animation -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[500px]">
                    <!-- Image for Halal -->
                    <img src="<?php echo e(asset('images/tersertifikasihalal.jpg')); ?>" 
                         alt="Tersertifikat Halal" 
                         class="w-full h-full object-cover img-pan transition-opacity duration-500 ease-in-out"
                         :style="{ opacity: activeTab === 'halal' ? 1 : 0, pointerEvents: activeTab === 'halal' ? 'auto' : 'none' }">
                    
                    <!-- Image for Higienis -->
                    <img src="<?php echo e(asset('images/standarhigienis.png')); ?>" 
                         alt="Standar Higienis" 
                         class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-500 ease-in-out"
                         :style="{ opacity: activeTab === 'higienis' ? 1 : 0, pointerEvents: activeTab === 'higienis' ? 'auto' : 'none' }">
                    
                    <!-- Image for Cold Chain -->
                    <img src="<?php echo e(asset('images/coldsupply.png')); ?>" 
                         alt="Cold Supply Chain" 
                         class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-500 ease-in-out"
                         :style="{ opacity: activeTab === 'cold' ? 1 : 0, pointerEvents: activeTab === 'cold' ? 'auto' : 'none' }">
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#6B3434] rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -top-6 -left-6 w-40 h-40 bg-red-500 rounded-full opacity-10 blur-3xl"></div>
            </div>
            
        </div>
    </div>
</section>

<!-- Produk — Dinamis dari Database -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Produk UD MAKMUR JAYA DAGING</h2>
        </div>

        <?php
            // Fallback gambar lokal berdasarkan slug (kalau DB kosong)
            $localImages = [
                'daging-bebek'   => asset('images/homepage.jpg'),
                'daging-sapi'    => asset('images/homepage.jpg'),
                'daging-kambing' => asset('images/homepage.jpg'),
                'daging-kerbau'  => asset('images/homepage.jpg'),
            ];
        ?>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                // Tentukan URL gambar: DB → storage → lokal → null
                if ($category->image) {
                    $imgSrc = str_starts_with($category->image, 'http')
                        ? $category->image
                        : asset('storage/' . $category->image);
                } else {
                    $imgSrc = $localImages[$category->slug] ?? null;
                }
            ?>
            <div class="group">
                <a href="<?php echo e(route('products.category', $category->slug)); ?>" class="block">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="relative overflow-hidden h-64">
                            <?php if($imgSrc): ?>
                                <img src="<?php echo e($imgSrc); ?>"
                                     alt="<?php echo e($category->name); ?>"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-br from-red-800 to-red-600 flex items-center justify-center">
                                    <span class="text-white text-7xl font-bold"><?php echo e(substr($category->name, 0, 1)); ?></span>
                                </div>
                            <?php endif; ?>
                            <!-- Overlay gradasi -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            <!-- Label produk_count -->
                            <div class="absolute bottom-4 left-4">
                                <span class="bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                    <?php echo e($category->products_count ?? 0); ?> Produk
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6 bg-gray-50">
                            <h3 class="text-2xl font-bold mb-3 text-gray-800 group-hover:text-red-600 transition-colors"><?php echo e($category->name); ?></h3>
                            <p class="text-gray-600 mb-4 line-clamp-2"><?php echo e($category->description); ?></p>
                            <span class="text-red-600 font-semibold inline-flex items-center group-hover:translate-x-2 transition-transform">
                                Cek Selengkapnya
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Dipercaya Mitra Aktif -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Dipercaya 3000+ Mitra Aktif</h2>
            <p class="text-xl text-gray-600">Dari skala bisnis kecil hingga besar telah bekerja sama dengan kami secara rutin</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <!-- Toko Ritel -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_toko_ritel', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">Toko Ritel</p>
            </div>
            
            <!-- Reseller -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_reseller', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">Reseller</p>
            </div>
            
            <!-- Restoran -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_restaurant', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">Restoran & Cafe</p>
            </div>
            
            <!-- Central Kitchen -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_central_kitchen', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">Central Kitchen</p>
            </div>
            
            <!-- Catering -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_catering', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">Catering</p>
            </div>
            
            <!-- SPPG -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2 flex items-baseline justify-center gap-2">
                    <span class="counter" data-target="<?php echo e(App\Models\Setting::get('partner_sppg', 0)); ?>">0</span>
                    <span class="text-2xl">+</span>
                </div>
                <p class="text-gray-600 font-medium">SPPG</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<?php if($testimonials->count() > 0): ?>
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Apa Kata Mereka?</h2>
            <p class="text-gray-500">Cerita nyata dari para mitra yang telah bersama kami</p>
        </div>

        <div class="mb-8">
            <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-sm text-center">
                <p class="text-sm text-gray-500 mb-2">Sedikit saran membantu kami melayani lebih baik.</p>
                <p class="text-gray-500 text-sm">Klik tombol di bawah untuk pergi ke halaman Secreto dan kirim pesan Anda secara langsung kepada kami.</p>
                <div class="mt-4">
                    <a href="https://secreto.site/ap7308" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold rounded-2xl px-6 py-3 shadow-lg transition">
                        Kirim Pesan ke Secreto
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 hover:shadow-md transition-shadow duration-300 flex flex-col">

                
                <div class="text-5xl font-serif text-[#6B3434]/20 leading-none mb-2 select-none">"</div>

                
                <p class="text-gray-600 text-sm leading-relaxed flex-1 mb-5"><?php echo e($testimonial->testimonial); ?></p>

                
                <div class="flex gap-0.5 mb-5">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <?php if($i <= $testimonial->rating): ?>
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php else: ?>
                            <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>

                
                <div class="border-t border-gray-200 pt-4 flex items-center gap-3">
                    <?php if($testimonial->photo): ?>
                        <img src="<?php echo e(asset('storage/' . $testimonial->photo)); ?>"
                             alt="<?php echo e($testimonial->name); ?>"
                             class="w-10 h-10 rounded-full object-cover flex-shrink-0">
                    <?php else: ?>
                        <div class="w-10 h-10 rounded-full bg-[#6B3434] text-white flex items-center justify-center text-sm font-bold flex-shrink-0">
                            <?php echo e(strtoupper(substr($testimonial->name, 0, 1))); ?>

                        </div>
                    <?php endif; ?>
                    <div>
                        <p class="font-semibold text-gray-800 text-sm"><?php echo e($testimonial->name); ?></p>
                        <p class="text-gray-500 text-xs"><?php echo e($testimonial->business_name); ?><?php if($testimonial->business_type): ?> · <?php echo e($testimonial->business_type); ?><?php endif; ?></p>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<?php endif; ?>

<!-- Prakata -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-[#C0392B] via-[#8B1A1A] to-[#6B3434] rounded-3xl overflow-hidden shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-5 items-stretch">
                
                <!-- Left Side - Image -->
                <div class="lg:col-span-2 relative min-h-[500px] lg:min-h-[600px]">
                    <img src="<?php echo e(asset('images/owner.jpg')); ?>" 
                         alt="Pemilik UD MAKMUR JAYA" 
                         class="absolute inset-0 w-full h-full object-cover object-top">
                </div>
                
                <!-- Right Side - Content -->
                <div class="lg:col-span-3 p-8 md:p-12 lg:p-16 text-white">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Prakata – <?php echo e(App\Models\Setting::get('company_name', 'UD MAKMUR JAYA DAGING')); ?></h2>
                    
                    <div class="space-y-4 text-base md:text-lg leading-relaxed mb-8">
                        <p>
                            Sejak berdiri, <strong><?php echo e(App\Models\Setting::get('company_name', 'UD MAKMUR JAYA DAGING')); ?></strong> telah dipercaya oleh banyak mitra bisnis. Komitmen kami adalah menjaga kualitas dan higienitas produk daging hingga sampai ke tangan Mitra.
                        </p>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-4">Komitmen Kami untuk Anda:</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-3">
                                    <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="text-base md:text-lg">Menjaga kualitas dan higienitas produk daging hingga sampai ke tangan Mitra.</p>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-3">
                                    <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="text-base md:text-lg">Menyediakan pasokan yang konsisten kepada Mitra demi kepuasan Konsumen.</p>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-3">
                                    <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="text-base md:text-lg">Terus berinovasi agar selalu relevan dan mampu menjawab kebutuhan pasar Anda.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-white/20">
                        <p class="text-base md:text-lg leading-relaxed">
                            Bersama Anda, kami yakin <strong><?php echo e(App\Models\Setting::get('company_name', 'UD MAKMUR JAYA DAGING')); ?></strong> akan terus tumbuh dan menjadi partner andalan dalam penyediaan produk daging berkualitas di Indonesia.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Diskusikan Kebutuhan Anda -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-br from-[#7B0000] to-[#3D0000] rounded-3xl overflow-hidden shadow-lg px-8 py-12">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Diskusikan Kebutuhan Anda</h2>
                <p class="text-white/70 text-base max-w-2xl mx-auto">Jika Anda memiliki pertanyaan atau butuh bantuan, silahkan hubungi kami langsung melalui platform dibawah ini.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number')); ?>?text=Halo! Saya tertarik untuk info pricelist & order retail" 
                   target="_blank"
                   class="bg-white/10 hover:bg-white text-white hover:text-gray-800 font-semibold py-5 px-6 rounded-2xl transition-all duration-300 text-center group border border-white/20 hover:border-transparent hover:shadow-xl">
                    <svg class="w-10 h-10 mx-auto mb-3 text-green-400 group-hover:text-green-500 transition" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span class="text-sm group-hover:text-green-600 transition">Tanya Toko</span>
                </a>
                
                
                <a href="<?php echo e(App\Models\Setting::get('instagram', 'https://instagram.com')); ?>" 
                   target="_blank"
                   class="bg-white/10 hover:bg-white text-white hover:text-gray-800 font-semibold py-5 px-6 rounded-2xl transition-all duration-300 text-center group border border-white/20 hover:border-transparent hover:shadow-xl">
                    <svg class="w-10 h-10 mx-auto mb-3 text-pink-400 group-hover:text-pink-500 transition" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span class="text-sm group-hover:text-pink-600 transition">Instagram</span>
                </a>
                
                
                <a href="<?php echo e(App\Models\Setting::get('tiktok', 'https://tiktok.com')); ?>" 
                   target="_blank"
                   class="bg-white/10 hover:bg-white text-white hover:text-gray-800 font-semibold py-5 px-6 rounded-2xl transition-all duration-300 text-center group border border-white/20 hover:border-transparent hover:shadow-xl">
                    <svg class="w-10 h-10 mx-auto mb-3 text-white group-hover:text-[#1A1A1A] transition" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.28 6.28 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.95a8.16 8.16 0 004.77 1.52V7.02a4.85 4.85 0 01-1-.33z"/>
                    </svg>
                    <span class="text-sm group-hover:text-[#1A1A1A] transition">TikTok</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Maps -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="bg-gray-50 rounded-3xl overflow-hidden shadow-lg flex flex-col lg:flex-row" style="min-height: 320px;">
            
            <!-- Info Panel -->
            <div class="lg:w-72 flex-shrink-0 bg-[#C0392B] text-white p-8 flex flex-col justify-center">
                <div class="mb-6">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Lokasi Kami</h3>
                    <p class="text-white/80 text-sm leading-relaxed"><?php echo e(App\Models\Setting::get('address', 'Jl. Contoh No.1, Kota')); ?></p>
                </div>

                <div class="mb-6">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Jam Operasional</h3>
                    <p class="text-white/80 text-sm"><?php echo e(App\Models\Setting::get('operational_weekday', 'Sen–Kam 05.00–11.00')); ?></p>
                    <p class="text-white/80 text-sm"><?php echo e(App\Models\Setting::get('operational_saturday', 'Jumat 05.00–10.00')); ?></p>
                    <p class="text-white/60 text-sm"><?php echo e(App\Models\Setting::get('operational_sunday', 'Minggu 05.00–11.00')); ?></p>
                </div>

                <a href="https://maps.google.com/?q=<?php echo e(urlencode(App\Models\Setting::get('address', ''))); ?>" 
                   target="_blank"
                   class="inline-flex items-center gap-2 bg-white text-[#C0392B] text-sm font-semibold px-4 py-2.5 rounded-xl hover:bg-red-50 transition w-fit">
                    Buka di Google Maps
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>

            <!-- Map -->
            <div class="flex-1 min-h-[260px]">
                <iframe 
                    src="https://www.google.com/maps?q=UD.+Daging+makmur+jaya,+Krsak,+Bangsri,+Kabupaten+Jepara,+Jawa+Tengah&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0; display:block;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        if (!counters.length) return;

        const animate = (el) => {
            const target = parseInt(el.dataset.target, 10) || 0;
            const duration = 1400;
            const startTime = performance.now();

            const tick = (now) => {
                const progress = Math.min((now - startTime) / duration, 1);
                el.textContent = Math.floor(progress * target);
                if (progress < 1) {
                    requestAnimationFrame(tick);
                } else {
                    el.textContent = target;
                }
            };

            requestAnimationFrame(tick);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = 'true';
                    animate(entry.target);
                }
            });
        }, { threshold: 0.4 });

        counters.forEach((counter) => observer.observe(counter));
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views/home.blade.php ENDPATH**/ ?>