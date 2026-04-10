<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - UD Makmur Jaya Daging</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --admin-primary: #DC2626;
            --admin-primary-dark: #7F1D1D;
            --admin-surface: rgba(255, 255, 255, 0.9);
            --admin-text: #2f1f1f;
            --admin-muted: #6b5b5b;
        }

        body {
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at top left, rgba(220, 38, 38, 0.22), transparent 35%),
                radial-gradient(circle at top right, rgba(127, 29, 29, 0.18), transparent 28%),
                linear-gradient(135deg, #5f1b1b 0%, #7f1d1d 38%, #c2410c 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--admin-text);
        }

        .login-container {
            width: 100%;
            max-width: 440px;
            background: var(--admin-surface);
            border: 1px solid rgba(255, 255, 255, 0.32);
            border-radius: 28px;
            padding: 42px 38px 36px;
            box-shadow: 0 25px 80px rgba(59, 13, 13, 0.28);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.3), transparent 40%);
            pointer-events: none;
        }

        .brand-badge {
            width: 68px;
            height: 68px;
            margin: 0 auto 18px;
            border-radius: 22px;
            background: linear-gradient(135deg, var(--admin-primary) 0%, var(--admin-primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 16px 30px rgba(127, 29, 29, 0.22);
            position: relative;
            z-index: 1;
        }

        .brand-badge img {
            width: 46px;
            height: 46px;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }

        .login-header {
            text-align: center;
            margin-bottom: 28px;
            position: relative;
            z-index: 1;
        }

        .login-header h1 {
            color: var(--admin-primary);
            font-size: 30px;
            margin-bottom: 8px;
            letter-spacing: -0.03em;
        }

        .login-header p {
            color: var(--admin-muted);
            font-size: 14px;
        }

        .login-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            padding: 7px 12px;
            border-radius: 999px;
            background: rgba(127, 29, 29, 0.08);
            color: var(--admin-primary-dark);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 14px;
            margin-bottom: 18px;
            font-size: 14px;
            position: relative;
            z-index: 1;
        }

        .alert-error {
            background: rgba(254, 226, 226, 0.9);
            color: #7f1d1d;
            border: 1px solid rgba(185, 28, 28, 0.12);
        }

        .alert-success {
            background: rgba(220, 252, 231, 0.9);
            color: #166534;
            border: 1px solid rgba(22, 101, 52, 0.12);
        }

        .form-group {
            margin-bottom: 18px;
            position: relative;
            z-index: 1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--admin-text);
        }

        .form-group input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid rgba(127, 29, 29, 0.14);
            border-radius: 14px;
            font-size: 14px;
            font-family: inherit;
            background: rgba(255, 255, 255, 0.95);
            transition: all 0.2s ease;
            color: var(--admin-text);
        }

        .form-group input::placeholder {
            color: #b28f8f;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--admin-primary);
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.1);
            background: #fff;
        }

        .btn {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, var(--admin-primary) 0%, var(--admin-primary-dark) 100%);
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 14px 30px rgba(127, 29, 29, 0.22);
            position: relative;
            z-index: 1;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 36px rgba(127, 29, 29, 0.28);
        }

        .btn:active {
            transform: translateY(0);
        }

        .info {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(127, 29, 29, 0.1);
            font-size: 12px;
            color: var(--admin-muted);
            position: relative;
            z-index: 1;
        }

        .info strong {
            color: var(--admin-primary-dark);
            display: block;
            margin-bottom: 5px;
        }

        .floating-accent {
            position: absolute;
            border-radius: 999px;
            background: rgba(220, 38, 38, 0.08);
            filter: blur(1px);
            pointer-events: none;
        }

        .floating-accent.one {
            width: 140px;
            height: 140px;
            top: -40px;
            right: -50px;
        }

        .floating-accent.two {
            width: 90px;
            height: 90px;
            left: -30px;
            bottom: 30px;
        }

        .error-text {
            color: #7f1d1d;
            font-size: 12px;
            margin-top: 6px;
        }

        @media (max-width: 600px) {
            .login-container {
                padding: 34px 22px 30px;
                border-radius: 24px;
            }

            .login-header h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="floating-accent one"></div>
        <div class="floating-accent two"></div>
        <div class="brand-badge">
            <img src="{{ asset('images/logo.png') }}" alt="UD Makmur Jaya">
        </div>
        <div class="login-header">
            <h1>Admin Panel</h1>
            <p>UD Makmur Jaya Daging</p>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-error">{{ $error }}</div>
            @endforeach
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Gmail" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                @error('password')
                    <div class="error-text">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="info">
            <strong>UD Makmur Jaya Daging</strong>
            Panel administrasi untuk mengelola produk, kategori, testimoni, dan pengaturan website.
        </div>
    </div>
</body>
</html>
