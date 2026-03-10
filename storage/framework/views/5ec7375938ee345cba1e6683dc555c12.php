
<?php $__env->startSection('title', 'Kelola Kategori'); ?>
<?php $__env->startSection('content'); ?>
<div class="container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1 style="margin: 0; font-size: 28px; font-weight: 700; color: #333;">Kelola Kategori</h1>
            <p style="margin: 5px 0 0 0; color: #666; font-size: 14px;">Atur kategori produk untuk katalog Anda</p>
        </div>
        <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn-create" style="background: #28a745; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s;">
            <span style="font-size: 18px;">+</span> Tambah Kategori
        </a>
    </div>

    <?php if(isset($categories) && $categories->count() > 0): ?>
        <!-- Categories Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px;">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="category-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s; border: 1px solid #e9ecef;">
                <!-- Category Image -->
                <div style="position: relative; overflow: hidden; height: 200px; background: #f5f5f5;">
                    <?php if($category && $category->image): ?>
                        <img src="<?php echo e(asset('storage/' . $category->image)); ?>" alt="<?php echo e($category->name); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else: ?>
                        <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 60px; font-weight: bold;">
                            <?php echo e(substr($category->name, 0, 1)); ?>

                        </div>
                    <?php endif; ?>
                    
                    <!-- Status Badge -->
                    <div style="position: absolute; top: 10px; right: 10px;">
                        <span style="display: inline-block; padding: 6px 12px; border-radius: 20px; font-size: 11px; font-weight: 700; <?php if($category && $category->is_active): ?> background: #d4edda; color: #155724; <?php else: ?> background: #f8d7da; color: #721c24; <?php endif; ?>">
                            <?php if($category && $category->is_active): ?> ✓ AKTIF <?php else: ?> ✗ NONAKTIF <?php endif; ?>
                        </span>
                    </div>
                </div>

                <!-- Category Info -->
                <div style="padding: 15px;">
                    <!-- Nama Kategori -->
                    <h3 style="margin: 0 0 10px 0; font-size: 16px; font-weight: 700; color: #333; min-height: 25px;">
                        <?php echo e($category->name); ?>

                    </h3>

                    <!-- Deskripsi -->
                    <?php if($category->description): ?>
                    <p style="margin: 0 0 12px 0; font-size: 13px; color: #666; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; min-height: 32px;">
                        <?php echo e($category->description); ?>

                    </p>
                    <?php else: ?>
                    <p style="margin: 0 0 12px 0; font-size: 13px; color: #999; line-height: 1.4; min-height: 32px;">Tidak ada deskripsi</p>
                    <?php endif; ?>

                    <!-- Product Count -->
                    <div style="padding: 12px; background: #fff3cd; border-radius: 6px; text-align: center; margin: 12px 0;">
                        <div style="font-size: 24px; font-weight: 700; color: #856404;">
                            📦 <?php echo e($category->products_count ?? 0); ?>

                        </div>
                        <div style="font-size: 12px; color: #856404; margin-top: 4px;">
                            <?php echo e(($category->products_count ?? 0) == 1 ? 'Produk' : 'Produk'); ?>

                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div style="margin-top: 15px; display: flex; gap: 8px; padding-top: 15px; border-top: 1px solid #eee; flex-wrap:wrap;">
                        <!-- Toggle Status -->
                        <form action="<?php echo e(route('admin.categories.toggle', $category->id)); ?>" method="POST" style="flex:1;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" style="width:100%;padding:8px 10px;border-radius:6px;border:none;font-size:12px;font-weight:600;cursor:pointer;transition:all 0.2s;<?php echo e($category->is_active ? 'background:#d4edda;color:#155724;' : 'background:#f8d7da;color:#721c24;'); ?>">
                                <?php echo e($category->is_active ? '✓ Aktif' : '✗ Nonaktif'); ?>

                            </button>
                        </form>
                        <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="btn-action" style="flex: 1; background: #ffc107; color: #333; padding: 10px 12px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; text-align: center; transition: all 0.2s;">
                            ✎ Edit
                        </a>
                        <form action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="POST" style="flex: 1;" onsubmit="return confirm('Hapus kategori \'<?php echo e(addslashes($category->name)); ?>\'?\n\n⚠️ PERHATIAN: Semua produk (<?php echo e($category->products_count ?? 0); ?>) di kategori ini juga akan ikut TERHAPUS!');">  
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-action" style="width: 100%; background: #dc3545; color: white; padding: 10px 12px; border-radius: 6px; border: none; font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s;">
                                🗑 Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Pagination -->
        <div style="display: flex; justify-content: center; margin-top: 30px;">
            <?php echo e($categories->links()); ?>

        </div>

    <?php else: ?>
        <!-- Empty State -->
        <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 10px;">
            <div style="font-size: 48px; margin-bottom: 15px;">📂</div>
            <h3 style="margin: 0 0 10px 0; font-size: 20px; font-weight: 700; color: #333;">Belum Ada Kategori</h3>
            <p style="margin: 0 0 20px 0; color: #666; font-size: 14px;">Mulai dengan membuat kategori produk pertama Anda</p>
            <a href="<?php echo e(route('admin.categories.create')); ?>" style="display: inline-block; background: #28a745; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s;">
                + Tambah Kategori
            </a>
        </div>
    <?php endif; ?>
</div>

<style>
    .category-card:hover {
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        transform: translateY(-4px);
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .btn-create:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    @media (max-width: 768px) {
        div[style*="grid-template-columns"] {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\admin\categories\index.blade.php ENDPATH**/ ?>