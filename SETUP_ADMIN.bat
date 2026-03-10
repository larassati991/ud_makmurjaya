@echo off
REM Setup Script untuk Admin Panel UD Makmur Jaya
REM Windows Batch Version

echo ======================================
echo Admin Panel Setup - UD Makmur Jaya
echo ======================================
echo.

REM Step 1: Run Migrations
echo 📊 Step 1: Menjalankan migrations...
php artisan migrate
echo ✅ Migrations selesai
echo.

REM Step 2: Link Storage
echo 📁 Step 2: Link storage untuk upload gambar...
php artisan storage:link
echo ✅ Storage linked
echo.

REM Step 3: Optional - Seed Database
echo 📦 Step 3: Menambahkan data contoh...
set /p SEED="Ingin menambahkan data contoh? (y/n): "
if /i "%SEED%"=="y" (
    php artisan db:seed
    echo ✅ Data contoh berhasil ditambahkan
) else (
    echo ⏭️ Skip adding sample data
)
echo.

REM Step 4: Cache
echo ⚡ Step 4: Membersihkan dan membangun cache...
php artisan config:cache
php artisan route:cache
echo ✅ Cache updated
echo.

echo ======================================
echo ✅ Setup Selesai!
echo ======================================
echo.
echo Admin Panel siap digunakan!
echo URL: http://localhost/ud-makmurjaya/admin/dashboard
echo.

pause
