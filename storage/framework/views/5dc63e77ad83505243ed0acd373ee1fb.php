

<?php $__env->startSection('title', 'Tentang Kami - UD MAKMUR JAYA DAGING'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-red-700 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
        <p class="text-xl"><?php echo e(App\Models\Setting::get('company_name')); ?></p>
    </div>
</section>

<!-- About Content -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <img src="https://images.unsplash.com/photo-1588347818036-4c0b5e5e5e5e?w=800" 
                     alt="Tentang Kami" 
                     class="rounded-2xl shadow-2xl">
            </div>
            <div>
                <h2 class="section-title"><?php echo e(App\Models\Setting::get('about_title')); ?></h2>
                <div class="text-lg text-gray-700 leading-relaxed space-y-4">
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
        <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number')); ?>?text=Halo, saya ingin bermitra dengan UD MAKMUR JAYA DAGING" 
           target="_blank"
           class="bg-white text-primary hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition transform hover:scale-105 inline-block">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\about.blade.php ENDPATH**/ ?>