<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'UD MAKMUR JAYA DAGING - Siap Suplai Daging ke Seluruh Indonesia'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'UD MAKMUR JAYA DAGING menyediakan berbagai pilihan daging lokal dan impor berkualitas untuk bisnis kuliner Anda'); ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#C0392B',
                        'primary-dark': '#96281B',
                        secondary: '#1A1A1A',
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js for interactive components -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Styles -->
    
    
    <?php echo $__env->yieldPushContent('styles'); ?>
    <style>
        * { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Header -->
    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- WhatsApp Floating Button -->
    <?php if (isset($component)) { $__componentOriginal4378b2eccec4e8470841be6441e66765 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4378b2eccec4e8470841be6441e66765 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.whatsapp-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('whatsapp-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4378b2eccec4e8470841be6441e66765)): ?>
<?php $attributes = $__attributesOriginal4378b2eccec4e8470841be6441e66765; ?>
<?php unset($__attributesOriginal4378b2eccec4e8470841be6441e66765); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4378b2eccec4e8470841be6441e66765)): ?>
<?php $component = $__componentOriginal4378b2eccec4e8470841be6441e66765; ?>
<?php unset($__componentOriginal4378b2eccec4e8470841be6441e66765); ?>
<?php endif; ?>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\layouts\app.blade.php ENDPATH**/ ?>