<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - Admin UD Makmur Jaya Daging</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding-top: 20px;
            overflow-y: auto;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav li {
            margin: 0;
        }

        .sidebar-nav a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }

        .sidebar-nav a:hover {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: white;
        }

        .sidebar-nav a.active {
            background: rgba(255, 255, 255, 0.2);
            border-left-color: white;
            font-weight: bold;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            min-height: 100vh;
            background: #f5f7fa;
        }

        .navbar {
            background: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .alert {
            padding: 12px 18px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #5568d3;
            transform: translateY(-2px);
        }

        .btn-success {
            background: #28a745;
            color: white;
        }

        .btn-success:hover {
            background: #218838;
        }

        .btn-warning {
            background: #ffc107;
            color: #333;
        }

        .btn-warning:hover {
            background: #e0a800;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .card-header h2 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #f8f9fa;
        }

        table th {
            padding: 12px;
            text-align: left;
            font-weight: 600;
            color: #333;
            border-bottom: 2px solid #dee2e6;
        }

        table td {
            padding: 12px;
            border-bottom: 1px solid #dee2e6;
        }

        table tr:hover {
            background: #f8f9fa;
        }

        .img-thumbnail {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
            font-size: 14px;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 8px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .image-preview {
            max-width: 200px;
            margin-top: 10px;
            border-radius: 6px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin: 20px 0;
        }

        .pagination a,
        .pagination span {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #667eea;
        }

        .pagination span.active {
            background: #667eea;
            color: white;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-card h3 {
            margin: 0 0 10px 0;
            color: #666;
            font-size: 14px;
        }

        .stat-card .number {
            font-size: 32px;
            font-weight: bold;
            color: #667eea;
        }

        .sidebar-brand {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            margin-bottom: 20px;
        }

        .sidebar-brand h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
                padding: 15px;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 150px;
            }

            .main-content {
                margin-left: 150px;
                padding: 10px;
            }

            .sidebar-nav a {
                padding: 10px 15px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>Admin Panel</h2>
            <small>UD Makmur Jaya</small>
        </div>
        <ul class="sidebar-nav">
            <li><a href="<?php echo e(route('admin.dashboard')); ?>" class="<?php if(Route::currentRouteName() == 'admin.dashboard'): ?> active <?php endif; ?>">📊 Dashboard</a></li>
            <li><hr style="background: rgba(255,255,255,0.2); border: 0; height: 1px; margin: 8px 0;"></li>
            <li><a href="<?php echo e(route('admin.categories.index')); ?>" class="<?php if(str_starts_with(Route::currentRouteName() ?? '', 'admin.categories')): ?> active <?php endif; ?>">📁 Kategori</a></li>
            <li><a href="<?php echo e(route('admin.products.index')); ?>" class="<?php if(str_starts_with(Route::currentRouteName() ?? '', 'admin.products')): ?> active <?php endif; ?>">🛍️ Produk</a></li>
            <li><a href="<?php echo e(route('admin.testimonials.index')); ?>" class="<?php if(str_starts_with(Route::currentRouteName() ?? '', 'admin.testimonials')): ?> active <?php endif; ?>">💬 Testimoni</a></li>
            <li><hr style="background: rgba(255,255,255,0.2); border: 0; height: 1px; margin: 8px 0;"></li>
            <li><a href="<?php echo e(route('admin.settings.index')); ?>" class="<?php if(str_starts_with(Route::currentRouteName() ?? '', 'admin.settings')): ?> active <?php endif; ?>">⚙️ Pengaturan</a></li>
            <li><hr style="background: rgba(255,255,255,0.2); border: 0; height: 1px; margin: 8px 0;"></li>
            <li><a href="<?php echo e(route('home')); ?>" target="_blank">👁️ Lihat Website</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="navbar">
            <h1><?php echo $__env->yieldContent('title'); ?></h1>
            <div style="display:flex;align-items:center;gap:12px;">
                <span style="color:#555;font-size:14px;">👤 <?php echo e(session('admin_user_name', 'Admin')); ?></span>
                <span style="color:#ccc;">|</span>
                <a href="<?php echo e(route('home')); ?>" target="_blank" style="color:#667eea;text-decoration:none;font-size:14px;">🌐 Lihat Website</a>
                <span style="color:#ccc;">|</span>
                <a href="<?php echo e(route('admin.logout')); ?>" style="color:#dc3545;text-decoration:none;font-size:14px;font-weight:600;" onclick="return confirm('Keluar dari admin panel?')">Logout</a>
            </div>
        </div>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <?php if($message = Session::get('error')): ?>
            <div class="alert alert-error">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views\admin\layout.blade.php ENDPATH**/ ?>