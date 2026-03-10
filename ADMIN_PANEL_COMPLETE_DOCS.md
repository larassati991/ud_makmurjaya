# 📖 Admin Panel - Dokumentasi Lengkap

## 🎯 Daftar Fitur

### Dashboard
- **URL**: `/admin/dashboard`
- **Fitur**: 
  - Statistik total produk
  - Statistik produk aktif
  - Statistik total kategori
  - Statistik kategori aktif
  - Quick access links

### Manajemen Kategori

#### Lihat Daftar Kategori
- **URL**: `/admin/categories`
- **Route**: `admin.categories.index`
- **Fitur**:
  - Tampilkan semua kategori dengan pagination
  - Preview gambar kategori
  - Status aktif/nonaktif
  - Action: Edit, Delete

#### Tambah Kategori
- **URL**: `/admin/categories/create`
- **Route**: `admin.categories.create`
- **Form Fields**:
  - Nama kategori (required)
  - Deskripsi (optional)
  - Gambar (optional)
  - Status aktif (default: checked)

#### Edit Kategori
- **URL**: `/admin/categories/{category}/edit`
- **Route**: `admin.categories.edit`
- **Fitur**:
  - Edit nama, deskripsi, gambar
  - Preview gambar saat ini
  - Opsi replace gambar atau keep existing

#### Hapus Kategori
- **Route**: `admin.categories.destroy`
- **Fitur**:
  - Confirm dialog sebelum delete
  - Auto delete image dari storage
  - Cascade delete produk yang terkait

### Manajemen Produk

#### Lihat Daftar Produk
- **URL**: `/admin/products`
- **Route**: `admin.products.index`
- **Fitur**:
  - Display: Gambar, Nama, Kategori, Harga, Status
  - Pagination
  - Action: Edit, Delete
  - Quick view deskripsi produk

#### Tambah Produk
- **URL**: `/admin/products/create`
- **Route**: `admin.products.create`
- **Form Fields**:
  - Kategori (required) - dropdown dari active categories
  - Nama produk (required)
  - Deskripsi (optional) - textarea
  - Harga (required) - number format
  - Berat (optional) - decimal
  - Gambar (optional)
  - Status aktif (default: checked)

#### Edit Produk
- **URL**: `/admin/products/{product}/edit`
- **Route**: `admin.products.edit`
- **Fitur**:
  - Edit semua field
  - Preview gambar saat ini
  - Opsi replace gambar

#### Hapus Produk
- **Route**: `admin.products.destroy`
- **Fitur**:
  - Confirm dialog
  - Auto delete image
  - Keep kategori intact

---

## 🛠️ Technical Details

### Storage Path
```
storage/app/public/
├── categories/
│   └── [timestamp]_[slugified-name].[ext]
└── products/
    └── [timestamp]_[slugified-name].[ext]
```

### File Upload Validation
```php
'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
```

### Pricing Format
- Format: Decimal (15 digits, 2 decimals)
- Min: 0
- Display: Formatted dengan Rp dan separator

---

## 📱 Responsive Design Breakpoints

| Device | Width | Sidebar | Adjustments |
|--------|-------|---------|-------------|
| Desktop | >768px | 250px | Full layout |
| Tablet | 480-768px | 200px | Reduced sidebar |
| Mobile | <480px | 150px | Compact mode |

---

## 🔒 Security Features

✅ **CSRF Protection**
- Token validation pada semua form POST/PUT/DELETE

✅ **Input Validation**
- Server-side validation untuk semua fields
- File type & size validation

✅ **File Handling**
- Delete old image before upload
- Unique filename dengan timestamp

---

## 🎨 UI Components

### Buttons
- `.btn` - Base button style
- `.btn-primary` - Blue (main action)
- `.btn-success` - Green (create)
- `.btn-warning` - Yellow (edit)
- `.btn-danger` - Red (delete)
- `.btn-sm` - Small variant

### Status Badge
- `.badge-success` - Aktif (Green)
- `.badge-secondary` - Nonaktif (Gray)

### Form Elements
- Input text, number, select
- Textarea dengan min-height 120px
- File input dengan image preview
- Checkbox untuk status

### Tables
- Striped rows dengan hover effect
- Responsive design
- Image thumbnail preview

---

## 📊 Database Schema

### Categories Table
```sql
id              INT PRIMARY KEY
name            VARCHAR(255)
slug            VARCHAR(255) UNIQUE
description     TEXT
image           VARCHAR(255)
order           INT DEFAULT 0
is_active       BOOLEAN DEFAULT true
created_at      TIMESTAMP
updated_at      TIMESTAMP
```

### Products Table
```sql
id              INT PRIMARY KEY
category_id     INT FOREIGN KEY
name            VARCHAR(255)
slug            VARCHAR(255) UNIQUE
description     TEXT
image           VARCHAR(255)
price           DECIMAL(15,2)            # NEW FIELD
weight          DECIMAL(10,2)
order           INT DEFAULT 0
is_active       BOOLEAN DEFAULT true
created_at      TIMESTAMP
updated_at      TIMESTAMP
```

---

## 🔄 Relationships

```
Category (1) ──→ (Many) Products
    ↓
  Cascade Delete
  (Ketika kategori dihapus, produk ikut dihapus)
```

---

## 🌐 Routes Overview

### Admin Routes Prefix: `/admin`

```
GET    /dashboard                      → admin.dashboard
GET    /categories                     → admin.categories.index
GET    /categories/create              → admin.categories.create
POST   /categories                     → admin.categories.store
GET    /categories/{category}/edit     → admin.categories.edit
PUT    /categories/{category}          → admin.categories.update
DELETE /categories/{category}          → admin.categories.destroy

GET    /products                       → admin.products.index
GET    /products/create                → admin.products.create
POST   /products                       → admin.products.store
GET    /products/{product}/edit        → admin.products.edit
PUT    /products/{product}             → admin.products.update
DELETE /products/{product}             → admin.products.destroy
```

---

## 💾 Data Model

### Category Model
```php
protected $fillable = [
    'name',
    'slug',
    'description',
    'image',
    'order',
    'is_active'
];

protected $casts = [
    'is_active' => 'boolean',
];

// Relationship
public function products() { 
    return $this->hasMany(Product::class); 
}
```

### Product Model
```php
protected $fillable = [
    'category_id',
    'name',
    'slug',
    'description',
    'image',
    'price',      
    'weight',
    'order',
    'is_active'
];

protected $casts = [
    'is_active' => 'boolean',
    'price' => 'decimal:2',
    'weight' => 'decimal:2'
];

// Relationship
public function category() { 
    return $this->belongsTo(Category::class); 
}
```

---

## 🌍 Integration dengan Frontend

### Mengakses Produk di Frontend

```php
// Get all active products with category
$products = Product::where('is_active', true)
                    ->with('category')
                    ->get();

// Get products by category
$products = Product::whereHas('category', function($q) {
                        $q->where('slug', 'daging-sapi');
                    })
                    ->where('is_active', true)
                    ->get();

// Display price
<p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>

// Display image
<img src="{{ asset('storage/' . $product->image) }}" />
```

---

## 📝 Sample Data (dari Seeder)

### Kategori Default
- Daging Sapi
- Daging Ayam
- Daging Bebek
- Daging Kambing

### Produk Default
Setiap kategori memiliki 3 produk dengan:
- Nama, deskripsi detail
- Harga berkisar 25rb - 180rb
- Berat bervariasi

---

## ✨ Best Practices

### Upload Gambar
1. Gunakan format JPG atau PNG
2. Ukuran: minimal 400x300px, maksimal 2MB
3. Namai file dengan descript (auto-slugified)

### Input Data
1. Gunakan nama produk yang jelas dan deskriptif
2. Tulis deskripsi yang menarik dan informatif
3. Set harga dengan teliti
4. Jangan lupa mengaktifkan produk

### Maintenance
1. Regular backup database
2. Monitor storage folder size
3. Delete unused images manually jika diperlukan

---

## 🐛 Debug Tips

### Set Debug Mode
```php
// Pastikan .env memiliki:
APP_DEBUG=true
```

### Check Storage Link
```bash
php artisan storage:link
php artisan storage:link --force
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:cache
php artisan route:cache
```

---

## 📞 Common Issues & Solutions

| Issue | Cause | Solution |
|-------|-------|----------|
| Gambar tidak muncul | Storage not linked | Run: `php artisan storage:link` |
| Upload error | Permission denied | Fix: `chmod -R 777 storage/` |
| Produk tidak tampil | is_active = false | Set is_active = true |
| Kategori tidak ada | Data belum seeded | Run: `php artisan db:seed` |
| Migration error | Kolom sudah ada | Aman, bisa skip |

---

**Dokumentasi Lengkap Adam Panel UD Makmur Jaya Daging**
Version: 1.0
Last Updated: 2026-02-24
