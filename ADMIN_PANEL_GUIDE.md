# ADMIN PANEL - UD MAKMUR JAYA DAGING

## 🎯 Fitur yang Tersedia

Admin panel ini memungkinkan Anda untuk:

### 📁 Manajemen Kategori
- ✅ Lihat semua kategori produk
- ✅ Tambahkan kategori baru dengan gambar
- ✅ Edit kategori (nama, deskripsi, gambar)
- ✅ Hapus kategori
- ✅ Aktifkan/nonaktifkan kategori

### 🛍️ Manajemen Produk
- ✅ Lihat semua produk dengan detail lengkap
- ✅ Tambahkan produk baru untuk setiap kategori
- ✅ Edit produk (nama, harga, deskripsi, gambar, berat)
- ✅ Hapus produk
- ✅ Aktifkan/nonaktifkan produk
- ✅ Upload dan manage gambar produk

### 📊 Dashboard
- Tampilan statistik jumlah produk dan kategori
- Status aktif/nonaktif untuk quick overview

---

## 🚀 Cara Mengakses Admin Panel

### URL Admin Dashboard
```
http://localhost/ud-makmurjaya/admin/dashboard
```

### Menu Navigasi Admin
- **Dashboard** - Halaman utama admin dengan statistik
- **Kategori** - Kelola kategori produk
- **Produk** - Kelola daftar produk
- **Lihat Website** - Preview website dari admin

---

## 📝 Setup Instructions (Jika Belum Berjalan)

### 1. Jalankan Migration
```bash
php artisan migrate
```

Ini akan menambahkan kolom `price` ke tabel products.

### 2. Link Storage untuk Upload Gambar
```bash
php artisan storage:link
```

Ini membuat symlink dari `storage/app/public` ke `public/storage`, sehingga gambar dapat diakses melalui web.

### 3. Bersihkan Cache
```bash
php artisan config:cache
php artisan route:cache
```

---

## 📂 Struktur File yang Ditambahkan

### Controllers
```
app/Http/Controllers/Admin/
├── AdminController.php (Dashboard)
├── ProductController.php (Manajemen Produk)
└── CategoryController.php (Manajemen Kategori)
```

### Views
```
resources/views/admin/
├── layout.blade.php (Template utama)
├── dashboard.blade.php (Dashboard)
├── categories/
│   ├── index.blade.php (Daftar kategori)
│   ├── create.blade.php (Form tambah kategori)
│   └── edit.blade.php (Form edit kategori)
└── products/
    ├── index.blade.php (Daftar produk)
    ├── create.blade.php (Form tambah produk)
    └── edit.blade.php (Form edit produk)
```

### Routes
- `admin.dashboard` - Dashboard admin
- `admin.categories.index` - Daftar kategori
- `admin.categories.create` - Form tambah kategori
- `admin.categories.store` - Simpan kategori baru
- `admin.categories.edit` - Form edit kategori
- `admin.categories.update` - Simpan perubahan kategori
- `admin.categories.destroy` - Hapus kategori
- `admin.products.index` - Daftar produk
- `admin.products.create` - Form tambah produk
- `admin.products.store` - Simpan produk baru
- `admin.products.edit` - Form edit produk
- `admin.products.update` - Simpan perubahan produk
- `admin.products.destroy` - Hapus produk

---

## 🖼️ Cara Menambah Produk

### Langkah 1: Buka Form Tambah Produk
1. Masuk ke Admin Panel
2. Klik menu **Produk** di sidebar
3. Klik tombol **"+ Tambah Produk"**

### Langkah 2: Isi Form
- **Kategori** - Pilih kategori produk (cth: Daging Sapi, Bebek, dll)
- **Nama Produk** - Nama produk (cth: "Daging Sapi Premium")
- **Deskripsi** - Jelaskan produk secara detail
- **Harga** - Harga dalam Rupiah
- **Berat** - Berat produk dalam kg (opsional)
- **Gambar** - Upload gambar produk (JPG/PNG, max 2MB)
- **Status** - Centang untuk membuat produk aktif/tampil di website

### Langkah 3: Simpan
Klik tombol **"💾 Simpan Produk"**

---

## 🖼️ Cara Menambah Kategori

### Langkah 1: Buka Form Tambah Kategori
1. Masuk ke Admin Panel
2. Klik menu **Kategori** di sidebar
3. Klik tombol **"+ Tambah Kategori"**

### Langkah 2: Isi Form
- **Nama Kategori** - Nama kategori (cth: "Daging Sapi")
- **Deskripsi** - Jelaskan kategori secara singkat
- **Gambar** - Upload gambar kategori (JPG/PNG, max 2MB)
- **Status** - Centang untuk membuat kategori aktif

### Langkah 3: Simpan
Klik tombol **"💾 Simpan Kategori"**

---

## 📋 Field pada Produk

| Field | Tipe | Deskripsi |
|-------|------|-----------|
| Kategori | Select | Pilih kategori produk |
| Nama | Text | Nama produk |
| Deskripsi | Textarea | Detail produk, manfaat, cara penyajian |
| Harga | Number | Harga dalam Rupiah |
| Berat | Number | Berat produk dalam kg (opsional) |
| Gambar | File | Upload gambar produk |
| Status | Checkbox | Aktif/Nonaktif di website |

---

## 📋 Field pada Kategori

| Field | Tipe | Deskripsi |
|-------|------|-----------|
| Nama | Text | Nama kategori |
| Deskripsi | Textarea | Deskripsi kategori |
| Gambar | File | Upload gambar kategori |
| Status | Checkbox | Aktif/Nonaktif di website |

---

## 🎨 Styling & Design

Admin panel menggunakan:
- **Layout Responsif** - Bekerja di desktop, tablet, dan mobile
- **Sidebar Navigation** - Menu navigasi di sisi kiri
- **Gradient Purple** - Tema warna ungu modern
- **Modern UI Components** - Button, form, table, card
- **Image Preview** - Preview gambar sebelum upload
- **Pagination** - Daftar dengan paginasi untuk performa

---

## 🔧 Troubleshooting

### Gambar tidak tampil?
- Jalankan command: `php artisan storage:link`
- Pastikan folder `storage/app/public` ada
- Cek permissions folder storage

### Error saat upload gambar?
- Pastikan ukuran file < 2MB
- Format file: JPG, PNG, atau GIF
- Cek permissions folder storage/app/public/products

### Produk tidak tampil di website?
- Pastikan status produk **Aktif** (checkbox dicentang)
- Pastikan kategori produk juga **Aktif**
- Clear cache dengan: `php artisan config:cache`

---

## 💡 Tips & Trik

1. **Gunakan Slug Otomatis** - Nama URL produk dibuat otomatis dari nama produk
2. **Gambar Berkualitas** - Gunakan gambar dengan resolusi tinggi untuk hasil terbaik
3. **Deskripsi Lengkap** - Semakin detail deskripsi, semakin menarik produk
4. **Kategori Terorganisir** - Kelompokkan produk dengan baik dalam kategori

---

## 📞 Support

Jika ada pertanyaan atau masalah, silakan hubungi tim development.

**Selamat menggunakan Admin Panel UD Makmur Jaya Daging!** 🎉
