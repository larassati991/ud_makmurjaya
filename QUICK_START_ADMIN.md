# 🚀 QUICK START - Admin Panel UD Makmur Jaya

## ⚡ Akses Cepat Admin Panel

### 🌐 URL Admin Panel
```
Dashboard:   http://127.0.0.1:8000/admin/dashboard
Kategori:    http://127.0.0.1:8000/admin/categories
Produk:      http://127.0.0.1:8000/admin/products
```

---

## 📋 Daftar Menu Admin

### 1. DASHBOARD 📊
**Tampilan Ringkasan**
- Total Produk
- Produk Aktif
- Total Kategori
- Statistik perolehan data

### 2. KATEGORI DAGING 📦
**Apa yang bisa dilakukan:**
- ➕ Tambah kategori baru
- ✏️ Edit nama/deskripsi kategori
- 🖼️ Upload gambar kategori
- ❌ Hapus kategori
- 🔄 Aktifkan/nonaktifkan kategori

**Kategori tersedia:**
- Daging Bebek
- Daging Sapi
- Daging Kambing
- Daging Kerbau
- Olahan

### 3. PRODUK 🥩
**Apa yang bisa dilakukan:**
- ➕ Tambah produk baru dengan:
  - Nama produk
  - Kategori produk
  - Deskripsi detail
  - Harga (dalam Rupiah)
  - Berat produk
  - Gambar produk
- ✏️ Edit data produk
- 🖼️ Upload/ganti gambar produk
- ❌ Hapus produk
- 🔄 Aktifkan/nonaktifkan produk

---

## 💰 Harga Produk Saat Ini

| # | Produk | Harga | Kategori |
|---|--------|-------|----------|
| 1 | Daging Bebek Bulk (Per KG) | Rp 180.000 | Daging Bebek |
| 2 | Daging Sapi Slice (Per KG) | Rp 140.000 | Daging Sapi |
| 3 | Daging Kambing Segar (Per KG) | Rp 160.000 | Daging Kambing |
| 4 | Bebek Peking | Rp 120.000 | Daging Bebek |

---

## 🎯 Contoh: Menambah Produk Baru

### Step 1: Buka Halaman Produk
```
http://127.0.0.1:8000/admin/products
```

### Step 2: Klik "Tambah Produk"
Isikan form dengan data berikut:

**Nama Produk:**
```
Daging Sapi Premium 1 kg
```

**Kategori:**
```
Pilih: Daging Sapi
```

**Deskripsi:**
```
Daging sapi premium berkualitas tinggi, cocok untuk berbagai masakan
```

**Harga:**
```
150000
```

**Berat:**
```
1
```

**Gambar:**
```
Upload file JPG/PNG/GIF (max 2MB)
```

### Step 3: Klik "Simpan"
Produk akan tersimpan dan muncul di daftar produk.

---

## 🐛 Jika Ada Error

### Error: "Gambar tidak muncul"
```bash
php artisan storage:link
php artisan view:clear
```

### Error: "Form tidak bisa diklik"
```bash
php artisan cache:clear
php artisan view:clear
```

### Error: "Database error"
Hubungi admin/developer

---

## ✅ Checklist - Fitur Sudah Ditest

- ✅ Dashboard menampilkan data
- ✅ Daftar kategori muncul
- ✅ Daftar produk muncul
- ✅ Tambah kategori berfungsi
- ✅ Tambah produk berfungsi
- ✅ Edit kategori berfungsi
- ✅ Edit produk berfungsi
- ✅ Hapus kategori berfungsi
- ✅ Hapus produk berfungsi
- ✅ Upload gambar berfungsi
- ✅ Harga produk bekerja
- ✅ Validasi form bekerja
- ✅ Database tersimpan dengan benar

---

## 📞 Support
Jika ada masalah dengan admin panel, hubungi tim development.

**Created**: 24 Feb 2026  
**Version**: 1.0 Final  
**Status**: ✅ READY TO USE
