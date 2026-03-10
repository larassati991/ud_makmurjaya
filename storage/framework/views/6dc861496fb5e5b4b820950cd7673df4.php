

<?php $__env->startSection('title', 'Hubungi Kami - UD MAKMUR JAYA DAGING'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-red-700 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-xl">Kami siap melayani kebutuhan daging berkualitas untuk bisnis Anda</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Contact Info -->
            <div>
                <h2 class="section-title mb-8">Informasi Kontak</h2>
                
                <!-- Alamat -->
                <div class="mb-8">
                    <div class="flex items-start mb-4">
                        <div class="bg-primary text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Alamat</h3>
                            <p class="text-gray-600"><?php echo e(App\Models\Setting::get('address')); ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Telepon -->
                <div class="mb-8">
                    <div class="flex items-start mb-4">
                        <div class="bg-primary text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Telepon</h3>
                            <p class="text-gray-600 mb-2">
                                <a href="tel:<?php echo e(App\Models\Setting::get('phone_1')); ?>" class="hover:text-primary">
                                    <?php echo e(App\Models\Setting::get('phone_1')); ?>

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="mb-8">
                    <div class="flex items-start mb-4">
                        <div class="bg-primary text-white p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Email</h3>
                            <p class="text-gray-600">
                                <a href="mailto:<?php echo e(App\Models\Setting::get('email')); ?>" class="hover:text-primary">
                                    <?php echo e(App\Models\Setting::get('email')); ?>

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Jam Operasional -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="font-bold text-lg mb-4">Jam Operasional</h3>
                    <div class="space-y-2 text-gray-600">
                        <p><?php echo e(App\Models\Setting::get('operational_weekday')); ?></p>
                        <p><?php echo e(App\Models\Setting::get('operational_saturday')); ?></p>
                        <p class="text-red-500 font-semibold"><?php echo e(App\Models\Setting::get('operational_sunday')); ?></p>
                    </div>
                </div>
            </div>
            
            <!-- WhatsApp Buttons -->
            <div>
                <h2 class="section-title mb-8">Hubungi Kami via WhatsApp</h2>
                <p class="text-gray-600 mb-6">Pilih layanan yang Anda butuhkan:</p>
                
                <div class="space-y-4">
                    <!-- Button 1 -->
                    <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number')); ?>?text=Halo! Saya tertarik untuk info pricelist & order retail" 
                       target="_blank"
                       class="block bg-white border-2 border-primary hover:bg-primary hover:text-white p-6 rounded-xl transition group shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-green-500 text-white p-4 rounded-lg mr-4 group-hover:bg-white group-hover:text-green-500 transition">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-lg mb-1"><?php echo e(App\Models\Setting::get('phone_1_label')); ?></h4>
                                <p class="text-sm text-gray-600 group-hover:text-white">Klik untuk chat sekarang</p>
                            </div>
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                    
                    <!-- Button 2 -->
                    <a href="https://wa.me/<?php echo e(App\Models\Setting::get('phone_2', App\Models\Setting::get('whatsapp_number'))); ?>?text=Halo! Saya tertarik untuk info kerjasama" 
                       target="_blank"
                       class="block bg-white border-2 border-primary hover:bg-primary hover:text-white p-6 rounded-xl transition group shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-green-500 text-white p-4 rounded-lg mr-4 group-hover:bg-white group-hover:text-green-500 transition">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-lg mb-1"><?php echo e(App\Models\Setting::get('phone_2_label')); ?></h4>
                                <p class="text-sm text-gray-600 group-hover:text-white">Klik untuk chat sekarang</p>
                            </div>
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                    
                    <!-- Button 3 -->
                    <a href="https://wa.me/<?php echo e(App\Models\Setting::get('phone_3', App\Models\Setting::get('whatsapp_number'))); ?>?text=Halo! Saya ingin menyampaikan pengaduan" 
                       target="_blank"
                       class="block bg-white border-2 border-primary hover:bg-primary hover:text-white p-6 rounded-xl transition group shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-green-500 text-white p-4 rounded-lg mr-4 group-hover:bg-white group-hover:text-green-500 transition">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-lg mb-1"><?php echo e(App\Models\Setting::get('phone_3_label')); ?></h4>
                                <p class="text-sm text-gray-600 group-hover:text-white">Klik untuk chat sekarang</p>
                            </div>
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maps -->
<section class="py-0">
    <div class="h-96">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0!2d110.0!3d-7.5!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMzAnMDAuMCJTIDExMMKwMDAnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\contact.blade.php ENDPATH**/ ?>