

<?php $__env->startSection('title', 'Edit Testimoni'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header" style="display:flex;justify-content:space-between;align-items:center">
        <h2>✏️ Edit Testimoni</h2>
        <a href="<?php echo e(route('admin.testimonials.index')); ?>" class="btn btn-secondary">← Kembali</a>
    </div>

    <?php if($errors->any()): ?>
        <div style="background:#f8d7da;color:#721c24;padding:12px 16px;border-radius:6px;margin-bottom:16px;border:1px solid #f5c6cb;">
            <ul style="margin:0;padding-left:18px">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <li><?php echo e($e); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('admin.testimonials.update', $testimonial)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

        <div class="form-grid">
            <div class="form-group">
                <label>Nama <span style="color:red">*</span></label>
                <input type="text" name="name" value="<?php echo e(old('name', $testimonial->name)); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Bisnis <span style="color:red">*</span></label>
                <input type="text" name="business_name" value="<?php echo e(old('business_name', $testimonial->business_name)); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tipe Bisnis</label>
                <input type="text" name="business_type" value="<?php echo e(old('business_type', $testimonial->business_type)); ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Rating <span style="color:red">*</span></label>
                <select name="rating" class="form-control" required>
                    <?php for($i=5;$i>=1;$i--): ?>
                        <option value="<?php echo e($i); ?>" <?php echo e(old('rating',$testimonial->rating)==$i?'selected':''); ?>><?php echo e($i); ?> Bintang <?php echo e(str_repeat('★',$i)); ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Testimoni <span style="color:red">*</span></label>
            <textarea name="testimonial" class="form-control" rows="4" required><?php echo e(old('testimonial', $testimonial->testimonial)); ?></textarea>
        </div>

        <div class="form-group">
            <label>Foto</label>
            <?php if($testimonial->photo): ?>
                <div style="margin-bottom:10px">
                    <img src="<?php echo e(asset('storage/' . $testimonial->photo)); ?>" style="width:80px;height:80px;border-radius:50%;object-fit:cover;border:2px solid #ddd">
                    <span style="color:#666;font-size:13px;display:block;margin-top:4px">Foto saat ini. Upload baru untuk mengganti.</span>
                </div>
            <?php endif; ?>
            <input type="file" name="photo" class="form-control" accept="image/*">
            <small style="color:#888">Format: JPG, PNG, GIF. Kosongkan jika tidak ingin mengganti.</small>
        </div>

        <div class="form-group">
            <label class="checkbox-label">
                <input type="checkbox" name="is_active" value="1" <?php echo e(old('is_active', $testimonial->is_active) ? 'checked' : ''); ?>>
                <span>Tampilkan di website</span>
            </label>
        </div>

        <div style="display:flex;gap:12px;margin-top:8px">
            <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
            <a href="<?php echo e(route('admin.testimonials.index')); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<style>
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 20px; }
.form-control { width: 100%; padding: 9px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; }
.form-control:focus { outline: none; border-color: #6B3434; box-shadow: 0 0 0 3px rgba(107,52,52,0.1); }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\admin\testimonials\edit.blade.php ENDPATH**/ ?>