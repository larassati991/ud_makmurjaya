

<?php $__env->startSection('title', $category->name . ' - UD MAKMUR JAYA DAGING'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section with Category Image -->
<section class="relative h-80 md:h-96 flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <?php if($category->image): ?>
            <img src="<?php echo e(asset('storage/' . $category->image)); ?>" 
                 alt="<?php echo e($category->name); ?>" 
                 class="w-full h-full object-cover">
        <?php else: ?>
            <!-- Default background image based on category -->
            <?php if($category->slug == 'daging-bebek'): ?>
                <img src="https://images.unsplash.com/photo-1587593810167-a84920ea0781?w=1920&q=80" 
                     alt="<?php echo e($category->name); ?>" 
                     class="w-full h-full object-cover">
            <?php elseif($category->slug == 'daging-sapi'): ?>
                <img src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=1920&q=80" 
                     alt="<?php echo e($category->name); ?>" 
                     class="w-full h-full object-cover">
            <?php elseif($category->slug == 'daging-kambing'): ?>
                <img src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?w=1920&q=80" 
                     alt="<?php echo e($category->name); ?>" 
                     class="w-full h-full object-cover">
            <?php elseif($category->slug == 'daging-kerbau'): ?>
                <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=1920&q=80" 
                     alt="<?php echo e($category->name); ?>" 
                     class="w-full h-full object-cover">
            <?php else: ?>
                <div class="w-full h-full bg-gradient-to-br from-red-600 to-red-800"></div>
            <?php endif; ?>
        <?php endif; ?>
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#6B3434]/90 to-[#6B3434]/70"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white"><?php echo e($category->name); ?></h1>
    </div>
</section>

<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="<?php echo e(route('home')); ?>" class="hover:text-red-600 transition">Beranda</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="<?php echo e(route('products.index')); ?>" class="hover:text-red-600 transition">Katalog Produk</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-red-600 font-medium"><?php echo e($category->name); ?></span>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <?php if($products->count() > 0): ?>
            <!-- Category Description -->
            <?php if($category->description): ?>
            <div class="mb-12 text-center max-w-3xl mx-auto">
                <p class="text-lg text-gray-600"><?php echo e($category->description); ?></p>
            </div>
            <?php endif; ?>
            
            <!-- Products Count -->
            <div class="mb-8">
                <p class="text-gray-600 text-lg">
                    Menampilkan <strong class="text-red-600"><?php echo e($products->count()); ?></strong> produk <?php echo e($category->name); ?>

                </p>
            </div>
            
            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <!-- Product Image -->
                    <div class="relative overflow-hidden h-64">
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" 
                                 alt="<?php echo e($product->name); ?>" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <?php else: ?>
                            <!-- Placeholder with category color -->
                            <div class="w-full h-full bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                                <span class="text-white text-6xl font-bold"><?php echo e(substr($product->name, 0, 1)); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                <?php echo e($category->name); ?>

                            </span>
                        </div>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-red-600 transition-colors">
                            <?php echo e($product->name); ?>

                        </h3>
                        
                        <?php if($product->description): ?>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2"><?php echo e($product->description); ?></p>
                        <?php endif; ?>
                        
                        <?php if($product->weight): ?>
                            <p class="text-sm text-gray-500 mb-4 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                                <span class="font-semibold">Berat:</span> <?php echo e(number_format($product->weight, 0, ',', '.')); ?>g
                            </p>
                        <?php endif; ?>
                        
                        <!-- Order Button -->
                        <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number', '6281234567890')); ?>?text=Halo, saya tertarik dengan produk <?php echo e($product->name); ?>" 
                           target="_blank"
                           class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-semibold py-3 px-6 rounded-lg transition transform hover:scale-105">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <!-- Pagination -->
            <?php if($products->hasPages()): ?>
            <div class="mt-12">
                <?php echo e($products->links()); ?>

            </div>
            <?php endif; ?>
            
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <svg class="w-32 h-32 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <h3 class="text-2xl font-bold text-gray-600 mb-4">Produk Belum Tersedia</h3>
                <p class="text-gray-500 mb-6">Saat ini belum ada produk <?php echo e($category->name); ?></p>
                <a href="<?php echo e(route('products.index')); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-lg transition">
                    Lihat Kategori Lain
                </a>
            </div>
        <?php endif; ?>
        
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 md:p-12 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Butuh Bantuan Memilih Produk?</h2>
            <p class="text-xl mb-8 text-white/90">Tim kami siap membantu Anda menemukan produk yang sesuai dengan kebutuhan bisnis Anda</p>
            <a href="https://wa.me/<?php echo e(App\Models\Setting::get('whatsapp_number', '6281234567890')); ?>?text=Halo, saya butuh bantuan memilih produk <?php echo e($category->name); ?>" 
               target="_blank"
               class="inline-flex items-center bg-white text-red-600 hover:bg-gray-100 font-bold px-8 py-4 rounded-lg transition transform hover:scale-105 shadow-lg">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Konsultasi Sekarang
            </a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\products\category.blade.php ENDPATH**/ ?>