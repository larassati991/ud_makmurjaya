

<?php $__env->startSection('title', 'UD MAKMUR JAYA DAGING - Siap Suplai Daging ke Seluruh Indonesia'); ?>

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
                <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number', '6281234567890')); ?>?text=Halo, saya ingin konsultasi" 
                   target="_blank"
                   class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white font-bold px-8 py-4 rounded-lg transition transform hover:scale-105 shadow-lg">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Konsultasi Via WA
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
                
                <!-- Tab 1: Halal Bersertifikat -->
                <div @click="activeTab = 'halal'" 
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
                            <h3 class="text-xl font-bold mb-2 flex items-center">
                                Halal Bersertifikat
                                <svg x-show="activeTab === 'halal'" 
                                     class="w-5 h-5 ml-auto" 
                                     fill="none" 
                                     stroke="currentColor" 
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <p class="text-sm leading-relaxed transition-opacity duration-500 ease-in-out"
                               :style="{ opacity: activeTab === 'halal' ? 1 : 0, pointerEvents: activeTab === 'halal' ? 'auto' : 'none' }"
                               :class="activeTab === 'halal' ? 'text-white/90' : 'text-gray-600'">
                                Diproses sesuai syariat Islam dan telah memiliki sertifikat halal resmi dari MUI
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 2: Standar Higienis -->
                <div @click="activeTab = 'higienis'" 
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
                            <h3 class="text-xl font-bold mb-2 flex items-center">
                                Standar Higienis
                                <svg x-show="activeTab === 'higienis'" 
                                     class="w-5 h-5 ml-auto" 
                                     fill="none" 
                                     stroke="currentColor" 
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <p class="text-sm leading-relaxed transition-opacity duration-500 ease-in-out"
                               :style="{ opacity: activeTab === 'higienis' ? 1 : 0, pointerEvents: activeTab === 'higienis' ? 'auto' : 'none' }"
                               :class="activeTab === 'higienis' ? 'text-white/90' : 'text-gray-600'">
                                Proses pengolahan daging dengan SOP ketat, menggunakan APD lengkap dan Vacuum Sealed Packaging menjaga kualitas daging
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Tab 3: Cold Supply Chain -->
                <div @click="activeTab = 'cold'" 
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
                            <h3 class="text-xl font-bold mb-2 flex items-center">
                                Cold Supply Chain
                                <svg x-show="activeTab === 'cold'" 
                                     class="w-5 h-5 ml-auto" 
                                     fill="none" 
                                     stroke="currentColor" 
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </h3>
                            <p class="text-sm leading-relaxed transition-opacity duration-500 ease-in-out"
                               :style="{ opacity: activeTab === 'cold' ? 1 : 0, pointerEvents: activeTab === 'cold' ? 'auto' : 'none' }"
                               :class="activeTab === 'cold' ? 'text-white/90' : 'text-gray-600'">
                                Kesegaran daging terjaga dengan rantai pasokan dingin, dipertahankan pada suhu -18°C hingga sampai ke tangan Anda.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Right Side - Image with Animation -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[500px]">
                    <!-- Image for Halal -->
                    <img src="<?php echo e(asset('images/homepage.jpg')); ?>" 
                         alt="Halal Bersertifikat" 
                         class="w-full h-[500px] object-cover transition-opacity duration-500 ease-in-out"
                         :style="{ opacity: activeTab === 'halal' ? 1 : 0, pointerEvents: activeTab === 'halal' ? 'auto' : 'none' }">
                    
                    <!-- Image for Higienis -->
                    <img src="<?php echo e(asset('images/homepage.jpg')); ?>" 
                         alt="Standar Higienis" 
                         class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out"
                         style="filter: grayscale(40%)"
                         :style="{ opacity: activeTab === 'higienis' ? 1 : 0, pointerEvents: activeTab === 'higienis' ? 'auto' : 'none' }">
                    
                    <!-- Image for Cold Chain -->
                    <img src="<?php echo e(asset('images/homepage.jpg')); ?>" 
                         alt="Cold Supply Chain" 
                         class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out"
                         style="filter: hue-rotate(180deg) saturate(0.7)"
                         :style="{ opacity: activeTab === 'cold' ? 1 : 0, pointerEvents: activeTab === 'cold' ? 'auto' : 'none' }">
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#6B3434] rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -top-6 -left-6 w-40 h-40 bg-red-500 rounded-full opacity-10 blur-3xl"></div>
            </div>
            
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
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_toko_ritel')); ?>+</div>
                <p class="text-gray-600 font-medium">Toko Ritel</p>
            </div>
            
            <!-- Reseller -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_reseller')); ?>+</div>
                <p class="text-gray-600 font-medium">Reseller</p>
            </div>
            
            <!-- Restoran -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_restaurant')); ?>+</div>
                <p class="text-gray-600 font-medium">Restoran & Cafe</p>
            </div>
            
            <!-- Central Kitchen -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_central_kitchen')); ?>+</div>
                <p class="text-gray-600 font-medium">Central Kitchen</p>
            </div>
            
            <!-- Catering -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_catering')); ?>+</div>
                <p class="text-gray-600 font-medium">Catering</p>
            </div>
            
            <!-- SPPG -->
            <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-xl transition transform hover:-translate-y-2">
                <div class="text-4xl font-bold text-red-600 mb-2"><?php echo e(App\Models\Setting::get('partner_sppg')); ?>+</div>
                <p class="text-gray-600 font-medium">SPPG</p>
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

<!-- Testimoni -->
<?php if($testimonials->count() > 0): ?>
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Klien Kami?</h2>
            <p class="text-xl text-gray-600">Cerita nyata dari pemilik usaha seperti Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                <div class="flex items-center mb-6">
                    <?php if($testimonial->photo): ?>
                        <img src="<?php echo e(asset('storage/' . $testimonial->photo)); ?>" 
                             alt="<?php echo e($testimonial->name); ?>" 
                             class="w-16 h-16 rounded-full object-cover mr-4">
                    <?php else: ?>
                        <div class="w-16 h-16 rounded-full bg-red-600 text-white flex items-center justify-center mr-4 text-2xl font-bold">
                            <?php echo e(substr($testimonial->name, 0, 1)); ?>

                        </div>
                    <?php endif; ?>
                    <div>
                        <h4 class="font-bold text-lg"><?php echo e($testimonial->name); ?></h4>
                        <p class="text-gray-600 text-sm"><?php echo e($testimonial->business_name); ?></p>
                        <p class="text-gray-500 text-xs"><?php echo e($testimonial->business_type); ?></p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <?php for($i = 0; $i < $testimonial->rating; $i++): ?>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <?php endfor; ?>
                </div>
                <p class="text-gray-700 italic">"<?php echo e($testimonial->testimonial); ?>"</p>
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
                    <!-- Placeholder untuk foto - Nanti ganti di VSCode -->
                    <div class="absolute inset-0 bg-gray-400 flex items-center justify-center">
                        <div class="text-center text-gray-600">
                            <svg class="w-24 h-24 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <p class="text-lg font-semibold">Foto Pemilik</p>
                            <p class="text-sm">Upload foto di public/images/owner.jpg</p>
                        </div>
                    </div>
                    
                    <!-- Uncomment ini setelah upload foto -->
                    <!-- <img src="<?php echo e(asset('images/owner.jpg')); ?>" 
                         alt="Pemilik UD MAKMUR JAYA" 
                         class="w-full h-full object-cover"> -->
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
<section class="py-20 bg-gradient-to-br from-[#7B0000] to-[#3D0000] text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Diskusikan Kebutuhan Anda</h2>
            <p class="text-xl text-gray-300">Jika Anda memiliki pertanyaan atau butuh bantuan, silahkan isi formulir ini dengan lengkap. Kami akan segera membalas pesan Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <!-- Button 1 -->
            <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number')); ?>?text=Halo! Saya tertarik untuk info pricelist & order retail" 
               target="_blank"
               class="bg-white text-gray-800 hover:bg-gray-100 font-semibold py-6 px-8 rounded-xl transition transform hover:scale-105 text-center shadow-xl group">
                <svg class="w-12 h-12 mx-auto mb-4 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span class="text-base group-hover:text-red-600 transition">Info Pricelist & Order Retail</span>
            </a>
            
            <!-- Button 2 -->
            <a href="https://wa.me/<?php echo e(App\Models\Setting::get('phone_2', App\Models\Setting::get('whatsapp_number'))); ?>?text=Halo! Saya tertarik untuk info kerjasama" 
               target="_blank"
               class="bg-white text-gray-800 hover:bg-gray-100 font-semibold py-6 px-8 rounded-xl transition transform hover:scale-105 text-center shadow-xl group">
                <svg class="w-12 h-12 mx-auto mb-4 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span class="text-base group-hover:text-red-600 transition">Info Kerjasama & Pengaduan</span>
            </a>
            
            <!-- Button 3 -->
            <a href="https://wa.me/<?php echo e(App\Models\Setting::get('phone_3', App\Models\Setting::get('whatsapp_number'))); ?>?text=Halo! Saya ingin menyampaikan pengaduan" 
               target="_blank"
               class="bg-white text-gray-800 hover:bg-gray-100 font-semibold py-6 px-8 rounded-xl transition transform hover:scale-105 text-center shadow-xl group">
                <svg class="w-12 h-12 mx-auto mb-4 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span class="text-base group-hover:text-red-600 transition">Tanya Toko</span>
            </a>
        </div>
    </div>
</section>

<!-- Maps -->
<section class="h-96">
    <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.260662837891!2d110.33089507501477!3d-7.767520492251896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c3c3c3c3c3%3A0x0!2zN8KwNDYnMDMuMSJTIDExMMKwMTknNTkuNyJF!5e0!3m2!1sen!2sid!4v1234567890" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\home.blade.php ENDPATH**/ ?>