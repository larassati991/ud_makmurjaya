<?php $__env->startSection('title', 'Tentang Kami - UD MAKMUR JAYA DAGING'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-red-700 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
        <p class="text-xl"><?php echo e(App\Models\Setting::get('company_name')); ?></p>
    </div>
</section>

<!-- Prakata Owner -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Prakata Owner</h2>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <!-- Foto Owner -->
                    <div class="md:col-span-1 relative">
                        <img src="<?php echo e(asset('images/owner.jpg')); ?>" 
                             alt="Owner UD. Makmur Jaya Ulum Daging"
                             class="w-full h-full object-cover object-top min-h-[350px]">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent md:hidden"></div>
                    </div>
                    <!-- Kutipan -->
                    <div class="md:col-span-2 p-10 flex flex-col justify-center">
                        <svg class="w-12 h-12 text-primary/20 mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p class="text-gray-700 text-lg leading-relaxed italic mb-8">
                            "Bismillah, dengan mengucap syukur kepada Allah SWT, UD. Makmur Jaya hadir untuk memberikan pelayanan terbaik dalam penyediaan daging berkualitas. Kepercayaan Anda adalah amanah yang kami jaga dengan sepenuh hati. Bersama, kita membangun usaha yang berkah dan memberi manfaat untuk semua."
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-1 bg-primary rounded-full"></div>
                            <div>
                                <p class="font-bold text-gray-800 text-lg"><?php echo e(App\Models\Setting::get('owner_name', 'Pimpinan')); ?></p>
                                <p class="text-primary text-sm font-medium">Owner & Pendiri UD. Makmur Jaya Ulum Daging</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <!-- Gambar -->
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-xl aspect-[4/3]">
                    <img src="<?php echo e(asset('images/tentangkami.png')); ?>" 
                         alt="Tentang Kami" 
                         class="w-full h-full object-cover object-center">
                </div>
                <!-- Aksen dekoratif -->
                <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#6B3434]/10 rounded-2xl -z-10"></div>
                <div class="absolute -top-4 -left-4 w-16 h-16 bg-[#6B3434]/10 rounded-full -z-10"></div>
            </div>
            <!-- Konten -->
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-[#6B3434] mb-2">
                    <?php echo e(App\Models\Setting::get('company_name', 'UD MAKMUR JAYA DAGING')); ?>

                </p>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-snug">
                    <?php echo e(App\Models\Setting::get('about_title')); ?>

                </h2>
                <div class="w-10 h-1 bg-[#6B3434] rounded-full mb-5"></div>
                <div class="text-gray-600 leading-relaxed space-y-3 text-base">
                    <?php echo nl2br(e(App\Models\Setting::get('about_content'))); ?>

                </div>
            </div>
        </div>
        
        <!-- Visi Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-primary">Visi</h3>
                <p class="text-gray-700">Menjadi supplier daging terpercaya dan terdepan di Indonesia dengan standar kualitas internasional.</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-primary">Misi</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Menyediakan daging berkualitas tinggi dengan harga kompetitif
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Menjaga standar kebersihan dan halal dalam setiap proses
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Memberikan pelayanan terbaik kepada mitra bisnis
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Keunggulan -->
        <div class="text-center mb-12">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Kualitas Terjamin</h3>
                <p class="text-gray-600">Hanya daging pilihan berkualitas premium yang kami distribusikan</p>
            </div>
            
            <div class="text-center">
                <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Pengiriman Tepat Waktu</h3>
                <p class="text-gray-600">Sistem distribusi yang efisien untuk pengiriman tepat waktu</p>
            </div>
            
            <div class="text-center">
                <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Pelayanan Profesional</h3>
                <p class="text-gray-600">Tim yang berpengalaman siap melayani kebutuhan Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-primary to-red-700 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Bermitra dengan Kami?</h2>
        <p class="text-xl mb-8">Hubungi kami sekarang untuk mendapatkan penawaran terbaik</p>
        <a href="https://wa.me/<?php echo e(preg_replace('/\\D+/', '', App\Models\Setting::get('whatsapp_number', '+62 852-2546-1504'))); ?>?text=Halo, saya ingin bermitra dengan UD MAKMUR JAYA DAGING" 
           target="_blank"
           class="bg-white text-primary hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition transform hover:scale-105 inline-block">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views/about.blade.php ENDPATH**/ ?>