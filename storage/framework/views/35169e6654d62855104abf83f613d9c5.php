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
            background: linear-gradient(135deg, #7f1d1d 0%, #4c1616 100%);
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
            background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%);
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
            border-color: #dc2626;
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
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
            color: #7f1d1d;
        }

        .pagination span.active {
            background: #dc2626;
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
            color: #dc2626;
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

        :root {
            --admin-primary: #DC2626;
            --admin-primary-dark: #7F1D1D;
            --admin-surface: rgba(255, 255, 255, 0.88);
            --admin-border: rgba(127, 29, 29, 0.12);
            --admin-text: #2f1f1f;
            --admin-muted: #6b5b5b;
            --admin-bg: #f7f1ee;
        }

        body {
            margin: 0;
            color: var(--admin-text);
            background:
                radial-gradient(circle at top left, rgba(220, 38, 38, 0.12), transparent 35%),
                radial-gradient(circle at top right, rgba(127, 29, 29, 0.08), transparent 30%),
                linear-gradient(180deg, #faf6f4 0%, var(--admin-bg) 100%);
        }

        .sidebar {
            width: 272px;
            padding: 20px 16px;
            background: linear-gradient(180deg, #7f1d1d 0%, #4c1616 52%, #2f0f0f 100%);
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 18px 0 40px rgba(45, 12, 12, 0.18);
        }

        .sidebar-brand {
            padding: 18px 14px 22px;
            border-bottom-color: rgba(255, 255, 255, 0.14);
        }

        .sidebar-brand h2 {
            margin: 10px 0 4px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .sidebar-brand small {
            color: rgba(255, 255, 255, 0.72);
        }

        .sidebar-logo {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            object-fit: contain;
            background: rgba(255, 255, 255, 0.14);
            padding: 8px;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.12);
        }

        .sidebar-nav a {
            padding: 13px 16px;
            border-left: 3px solid transparent;
            border-radius: 14px;
            margin: 4px 0;
            transition: all 0.25s ease;
        }

        .sidebar-nav a:hover {
            background: rgba(255, 255, 255, 0.08);
            border-left-color: rgba(255, 255, 255, 0.6);
            transform: translateX(2px);
        }

        .sidebar-nav a.active {
            background: rgba(255, 255, 255, 0.14);
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.08);
        }

        .main-content {
            margin-left: 272px;
            padding: 24px;
        }

        .navbar,
        .card,
        .stat-card {
            border: 1px solid var(--admin-border);
            box-shadow: 0 18px 40px rgba(73, 25, 25, 0.08);
        }

        .navbar {
            background: var(--admin-surface);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            padding: 18px 22px;
            border-radius: 22px;
        }

        .navbar h1,
        .card-header h2,
        .form-group label,
        .stat-card h3,
        table th,
        .pagination a,
        .pagination span,
        .btn-secondary {
            color: var(--admin-text);
        }

        .navbar .admin-meta,
        .stat-card h3,
        .info,
        .form-group label,
        .sidebar-brand small {
            color: var(--admin-muted);
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.12), rgba(127, 29, 29, 0.08));
            color: #7f1d1d;
            border-color: rgba(127, 29, 29, 0.12);
        }

        .alert-error {
            background: rgba(248, 215, 218, 0.8);
            color: #7a1d1d;
            border-color: rgba(122, 29, 29, 0.14);
        }

        .btn-primary,
        .btn-danger,
        .pagination span.active {
            background: linear-gradient(135deg, var(--admin-primary) 0%, var(--admin-primary-dark) 100%);
            color: white;
        }

        .btn-secondary {
            background: rgba(127, 29, 29, 0.08);
            border: 1px solid rgba(127, 29, 29, 0.12);
        }

        .btn-success {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
        }

        .btn-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
        }

        .card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 22px;
            padding: 24px;
        }

        .card-header {
            border-bottom: 1px solid rgba(127, 29, 29, 0.08);
        }

        .stat-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.96), rgba(255,255,255,0.88));
            border-radius: 22px;
            border: 1px solid rgba(127, 29, 29, 0.1);
        }

        .stat-card .number {
            color: var(--admin-primary);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            border-color: rgba(127, 29, 29, 0.12);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--admin-text);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--admin-primary);
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.1);
            background: #fff;
        }

        .pagination a,
        .pagination span {
            border-color: rgba(127, 29, 29, 0.12);
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        table thead {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.08), rgba(127, 29, 29, 0.04));
        }

        table th,
        table td {
            border-bottom-color: rgba(127, 29, 29, 0.08);
        }

        table tr:hover {
            background: rgba(220, 38, 38, 0.03);
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .admin-user-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(127, 29, 29, 0.08);
            color: var(--admin-primary-dark);
            font-weight: 600;
        }

        .admin-user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--admin-primary) 0%, var(--admin-primary-dark) 100%);
            color: white;
            font-size: 13px;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 220px;
            }

            .main-content {
                margin-left: 220px;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 190px;
            }

            .main-content {
                margin-left: 190px;
            }

            .card,
            .navbar,
            .stat-card {
                border-radius: 18px;
            }
        }

        /* Enhanced Form Styling for Professional Admin */
        .card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 252, 250, 0.9) 100%);
            border: 1px solid rgba(127, 29, 29, 0.08);
            box-shadow: 0 8px 32px rgba(73, 25, 25, 0.08), inset 0 1px 0 rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 12px 40px rgba(73, 25, 25, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.6);
        }

        .form-group {
            margin-bottom: 24px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #2f1f1f;
            font-size: 14px;
            letter-spacing: 0.3px;
            text-transform: uppercase;
            opacity: 0.9;
        }

        .form-group input:not([type="checkbox"]):not([type="radio"]),
        .form-group textarea,
        .form-group select {
            padding: 12px 14px;
            border: 1.5px solid rgba(127, 29, 29, 0.12);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            transition: all 0.25s ease;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-group input:not([type="checkbox"]):not([type="radio"]):focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #dc2626;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.12), 0 4px 12px rgba(220, 38, 38, 0.15);
            transform: translateY(-1px);
        }

        .form-group textarea {
            min-height: 140px;
            resize: vertical;
            line-height: 1.5;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(111, 91, 91, 0.5);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        /* Alert Styling */
        .alert {
            padding: 16px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            border-left: 4px solid;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.08);
            color: #186e25;
            border-left-color: #22c55e;
        }

        .alert-error {
            background: rgba(220, 38, 38, 0.08);
            color: #7f1d1d;
            border-left-color: #dc2626;
        }

        .alert ul {
            margin: 8px 0;
            padding-left: 20px;
        }

        .alert li {
            margin-bottom: 4px;
            font-size: 13px;
        }

        /* Enhanced Button Styling */
        .btn {
            font-weight: 600;
            letter-spacing: 0.2px;
            transition: all 0.25s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .btn-primary,
        .btn-success {
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.2);
        }

        .btn-primary:hover,
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(220, 38, 38, 0.3);
        }

        .btn-primary:active,
        .btn-success:active {
            transform: translateY(0);
        }

        .btn-danger {
            background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.2);
        }

        .btn-danger:hover {
            box-shadow: 0 8px 28px rgba(220, 38, 38, 0.3);
            transform: translateY(-2px);
        }

        /* Checkbox styling */
        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 0;
            cursor: pointer;
            font-weight: 500;
            color: #2f1f1f;
        }

        .checkbox-label input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-right: 10px;
            cursor: pointer;
            accent-color: #dc2626;
        }

        /* Image Preview */
        .image-preview {
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid rgba(220, 38, 38, 0.1);
            margin-top: 12px;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.12);
        }

        /* Small text helper */
        small {
            color: var(--admin-muted);
            font-size: 12px;
            margin-top: 6px;
            display: block;
        }

        /* Table Enhancement */
        table {
            background: rgba(255, 255, 255, 0.6);
        }

        table thead {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.08) 0%, rgba(127, 29, 29, 0.06) 100%);
        }

        table th {
            color: #2f1f1f;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        table td {
            color: #3d2d2d;
        }

        table tr:hover {
            background: rgba(220, 38, 38, 0.04);
        }

        /* Actions container */
        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .actions .btn {
            padding: 6px 12px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="UD Makmur Jaya" class="sidebar-logo">
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
        </ul>
    </div>

    <div class="main-content">
        <div class="navbar">
            <h1><?php echo $__env->yieldContent('title'); ?></h1>
            <div class="top-actions">
                <span class="admin-user-chip"><span class="admin-user-avatar">A</span> <?php echo e(session('admin_user_name', 'Admin')); ?></span>
                <a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Keluar dari admin panel?')">Logout</a>
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
<?php /**PATH C:\laragon\www\ud-makmurjaya\resources\views/admin/layout.blade.php ENDPATH**/ ?>