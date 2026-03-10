<!DOCTYPE html>
<html>
<head>
    <title>UD MAKMUR JAYA DAGING</title>
</head>
<body style="font-family: Arial; margin: 40px;">
    <h1>UD MAKMUR JAYA DAGING</h1>
    <p>Siap Suplai Daging ke Seluruh Indonesia</p>
    
    <h2>Kategori Produk:</h2>
    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div style="margin: 10px 0; padding: 10px; border: 1px solid #ddd;">
            <h3><?php echo e($category->name); ?></h3>
            <p><?php echo e($category->description); ?></p>
            <p><a href="<?php echo e(route('products.category', $category->slug)); ?>">Lihat Produk</a></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Tidak ada kategori</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\home_simple.blade.php ENDPATH**/ ?>