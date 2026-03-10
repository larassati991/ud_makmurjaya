# 🚀 QUICK START - Admin Panel UD Makmur Jaya

## ⚡ Setup Cepat (5 Menit)

### Pilihan 1: Automatic Setup (Recommended)

**Untuk Windows:**
```bash
SETUP_ADMIN.bat
```

**Untuk Mac/Linux:**
```bash
bash SETUP_ADMIN.sh
```

### Pilihan 2: Manual Setup

```bash
# 1. Jalankan migration
php artisan migrate

# 2. Link storage untuk gambar
php artisan storage:link

# 3. (Optional) Tambahkan data contoh
php artisan db:seed

# 4. Bersihkan cache
php artisan config:cache
php artisan route:cache
```

---

## ✅ Verifikasi Setup

Jika setup berhasil, Anda akan melihat ini:
- ✅ Pesan "Migrated successfully"
- ✅ Folder `public/storage` ada
- ✅ Tidak ada error di console

---

## 🎯 Akses Admin Panel

```
http://localhost/ud-makmurjaya/admin/dashboard
```

---

## 📝 Hal Pertama yang Harus Dilakukan

1. **Buka Admin Dashboard**
   - Kunjungi URL di atas

2. **Tambahkan Kategori Produk**
   - Klik menu "Kategori"
   - Klik "+ Tambah Kategori"
   - Isi: Nama, Deskripsi, Gambar
   - Klik "Simpan"

3. **Tambahkan Produk**
   - Klik menu "Produk"
   - Klik "+ Tambah Produk"
   - Pilih kategori yang sudah dibuat
   - Isi: Nama, Harga, Deskripsi, Gambar, Berat
   - Klik "Simpan"

4. **Lihat di Website**
   - Produk akan langsung tampil di website Anda!

---

## 🖼️ Upload Gambar

### Spesifikasi:
- **Format**: JPG, PNG, GIF
- **Ukuran Max**: 2MB
- **Rekomendasi**: 800x600px atau lebih

### Folder Penyimpanan:
- Kategori: `storage/app/public/categories/`
- Produk: `storage/app/public/products/`

---

## 🎨 Key Features

✨ **Modern UI**
- Sidebar navigation yang elegan
- Responsive design (desktop, tablet, mobile)
- Tema warna profesional

📊 **Dashboard**
- Statistik jumlah produk dan kategori
- Quick access ke menu utama

🖼️ **Image Management**
- Preview gambar sebelum upload
- Otomatis replace gambar lama saat edit
- Otomatis delete gambar saat hapus produk

📋 **Data Management**
- CRUD lengkap untuk kategori dan produk
- Pagination untuk list yang banyak
- Status aktif/nonaktif untuk each item

---

## ⚠️ Troubleshooting

### Error: "Gambar tidak bisa diupload"
```bash
# Solusi: Cek permissions storage
chmod -R 777 storage/app/public
```

### Error: "Gambar tidak tampil di website"
```bash
# Solusi: Link storage belum jalan
php artisan storage:link
```

### Error: "Database error saat tambah produk"
```bash
# Solusi: Migration belum berjalan
php artisan migrate
```

---

## 📚 Dokumentasi Lengkap

Untuk dokumentasi detail, lihat file: **ADMIN_PANEL_GUIDE.md**

---

## 💬 Tips

1. Selalu gunakan gambar berkualitas tinggi
2. Tulis deskripsi produk yang menarik dan detail
3. Jangan lupa mengaktifkan produk agar tampil di website
4. Organize kategori dengan baik agar mudah ditemukan

---

**Selamat menggunakan Admin Panel!** 🎉
