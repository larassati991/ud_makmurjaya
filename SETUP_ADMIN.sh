#!/bin/bash
# Setup Script untuk Admin Panel UD Makmur Jaya

echo "======================================"
echo "Admin Panel Setup - UD Makmur Jaya"
echo "======================================"
echo ""

# Step 1: Run Migrations
echo "📊 Step 1: Menjalankan migrations..."
php artisan migrate
echo "✅ Migrations selesai"
echo ""

# Step 2: Link Storage
echo "📁 Step 2: Link storage untuk upload gambar..."
php artisan storage:link
echo "✅ Storage linked"
echo ""

# Step 3: Seed Database (Optional)
read -p "📦 Step 3: Ingin menambahkan data contoh? (y/n) " -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]; then
    php artisan db:seed
    echo "✅ Data contoh berhasil ditambahkan"
fi
echo ""

# Step 4: Cache
echo "⚡ Step 4: Membersihkan dan membangun cache..."
php artisan config:cache
php artisan route:cache
echo "✅ Cache updated"
echo ""

echo "======================================"
echo "✅ Setup Selesai!"
echo "======================================"
echo ""
echo "Admin Panel siap digunakan!"
echo "URL: http://localhost/ud-makmurjaya/admin/dashboard"
echo ""
