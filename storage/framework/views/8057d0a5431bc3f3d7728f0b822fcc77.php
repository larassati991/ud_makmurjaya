

<?php $__env->startSection('title', 'Testimoni'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header" style="display:flex;justify-content:space-between;align-items:center">
        <h2>💬 Testimoni</h2>
        <a href="<?php echo e(route('admin.testimonials.create')); ?>" class="btn btn-primary">+ Tambah Testimoni</a>
    </div>

    <?php if(session('success')): ?>
        <div style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:6px;margin-bottom:16px;border:1px solid #c3e6cb;">
            ✅ <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($testimonials->isEmpty()): ?>
        <div style="text-align:center;padding:60px 20px;color:#888">
            <div style="font-size:48px;margin-bottom:16px">💬</div>
            <p>Belum ada testimoni. <a href="<?php echo e(route('admin.testimonials.create')); ?>" style="color:#6B3434">Tambah sekarang</a></p>
        </div>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama / Bisnis</th>
                    <th>Testimoni</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php if($t->photo): ?>
                            <img src="<?php echo e(asset('storage/' . $t->photo)); ?>" style="width:50px;height:50px;border-radius:50%;object-fit:cover">
                        <?php else: ?>
                            <div style="width:50px;height:50px;border-radius:50%;background:#6B3434;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:18px">
                                <?php echo e(substr($t->name, 0, 1)); ?>

                            </div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <strong><?php echo e($t->name); ?></strong><br>
                        <span style="color:#666;font-size:13px"><?php echo e($t->business_name); ?></span><br>
                        <?php if($t->business_type): ?>
                            <span style="color:#888;font-size:12px"><?php echo e($t->business_type); ?></span>
                        <?php endif; ?>
                    </td>
                    <td style="max-width:300px">
                        <span style="font-size:13px;color:#555"><?php echo e(Str::limit($t->testimonial, 100)); ?></span>
                    </td>
                    <td>
                        <span style="color:#f59e0b;font-size:16px">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php echo e($i <= $t->rating ? '★' : '☆'); ?>

                            <?php endfor; ?>
                        </span>
                    </td>
                    <td>
                        <?php if($t->is_active): ?>
                            <span style="background:#d4edda;color:#155724;padding:3px 10px;border-radius:12px;font-size:12px;font-weight:600">Aktif</span>
                        <?php else: ?>
                            <span style="background:#f8d7da;color:#721c24;padding:3px 10px;border-radius:12px;font-size:12px;font-weight:600">Nonaktif</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div style="display:flex;gap:6px;flex-wrap:wrap">
                            
                            <form method="POST" action="<?php echo e(route('admin.testimonials.toggle', $t)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-secondary" style="padding:4px 10px;font-size:12px">
                                    <?php echo e($t->is_active ? '🔴 Nonaktif' : '🟢 Aktif'); ?>

                                </button>
                            </form>
                            
                            <a href="<?php echo e(route('admin.testimonials.edit', $t)); ?>" class="btn btn-secondary" style="padding:4px 10px;font-size:12px">✏️ Edit</a>
                            
                            <form method="POST" action="<?php echo e(route('admin.testimonials.destroy', $t)); ?>" onsubmit="return confirm('Hapus testimoni dari <?php echo e($t->name); ?>?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" style="padding:4px 10px;font-size:12px">🗑️ Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\admin\testimonials\index.blade.php ENDPATH**/ ?>