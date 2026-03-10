
<?php $__env->startSection('title', 'Edit Kategori'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h2>Edit Kategori: <?php echo e($category->name); ?></h2>
    </div>
    <?php if($errors->any()): ?>
    <div class="alert alert-error">
        <strong>Terjadi kesalahan:</strong>
        <ul style="margin: 10px 0; margin-left: 20px;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('admin.categories.update', $category)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div style="max-width: 600px;">
            <div class="form-group">
                <label for="name">Nama Kategori <span style="color: red;">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo e(old('name', $category->name)); ?>" required>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red; font-size: 12px;"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" name="description"><?php echo e(old('description', $category->description)); ?></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red; font-size: 12px;"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="image">Gambar Kategori</label>
                <?php if($category->image): ?>
                <div style="margin-bottom: 10px;">
                    <p style="margin: 0; color: #666; font-size: 13px;">Gambar saat ini:</p>
                    <img src="<?php echo e(asset('storage/' . $category->image)); ?>" alt="<?php echo e($category->name); ?>" class="image-preview">
                </div>
                <?php endif; ?>
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666; display: block; margin-top: 5px;">Format: JPG, PNG, GIF (Max 2MB)</small>
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red; font-size: 12px;"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <img id="preview" class="image-preview" style="display: none;">
            </div>
            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="is_active" value="1" <?php echo e(old('is_active', $category->is_active) ? 'checked' : ''); ?>>
                    <span>Kategori Aktif (Tampil di website)</span>
                </label>
            </div>
            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn" style="background: #6c757d; color: white;">Batal</a>
            </div>
        </div>
    </form>
</div>
<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('preview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\admin\categories\edit.blade.php ENDPATH**/ ?>