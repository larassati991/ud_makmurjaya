# 🎯 Admin Panel Quick Start Guide

## Login

1. Go to `http://localhost/login` or `your-domain.com/login`
2. Enter admin credentials
3. Click Login

## Dashboard Overview

After login, you'll see:
- **Statistics**: Total products, categories, testimonials with active counts
- **Recent Products**: 5 latest products added
- **Quick Actions**: Buttons to add new items
- **System Info**: Laravel version and environment details

## 📦 Managing Products

### Add New Product
1. Click **➕ Tambah Produk** (Add Product)
2. Select **Kategori** (Category) from dropdown
3. Enter **Nama Produk** (Product Name) - Required
4. Enter **Deskripsi Produk** (Description) - Optional
5. Enter **Harga** (Price) in Rupiah - Required
6. Enter **Berat** (Weight) in kg - Optional
7. Upload **Gambar Produk** (Product Image) - Optional, JPG/PNG/GIF only
8. Check **Produk Aktif** to show on website
9. Click **💾 Simpan Produk** (Save Product)

### Edit Product
1. Go to **🛍️ Produk** (Products)
2. Find the product in the list
3. Click **Edit** button
4. Make changes
5. Click **💾 Simpan Produk** (Save Product)

### Delete Product
1. Go to **🛍️ Produk** (Products)
2. Click **Hapus** (Delete) button next to product
3. Confirm deletion

### Toggle Product Active Status
1. Go to **🛍️ Produk** (Products)  
2. Find the product
3. Click the active/inactive status badge to toggle

---

## 🏷️ Managing Categories

### Add New Category
1. Click **➕ Tambah Kategori** (Add Category)
2. Enter **Nama Kategori** (Category Name) - Required
3. Enter **Deskripsi** (Description) - Optional
4. Upload **Gambar Kategori** (Category Image) - Optional
5. Check **Kategori Aktif** to show on website
6. Click **💾 Simpan Kategori** (Save Category)

### Edit Category
1. Go to **📁 Kategori** (Categories)
2. Find the category in the list
3. Click **Edit** button
4. Make changes
5. Click **💾 Simpan Kategori** (Save Category)

---

## 💬 Managing Testimonials

### Add New Testimonial
1. Click **➕ Tambah Testimoni** (Add Testimonial)
2. Enter **Nama** (Name) - Required
3. Enter **Nama Bisnis** (Business Name) - Required
4. Enter **Tipe Bisnis** (Business Type) - e.g., Restaurant, Catering
5. Select **Rating** (Star Rating) from 1-5 - Required
6. Enter **Testimoni** (Testimonial/Feedback) - Required
7. Upload **Foto** (Photo) - Optional
8. Check **Tampilkan di website** to display on website
9. Click **💾 Simpan Testimoni** (Save Testimonial)

### Edit/Delete Testimonials
1. Go to **💬 Testimoni** (Testimonials)
2. Find the testimonial
3. Click **Edit** to modify or **Hapus** to delete

---

## ⚙️ Website Settings (IMPORTANT!)

This is where you control **ALL website content**!

1. Click **⚙️ Pengaturan** (Settings)
2. Update any of these fields:

### Company Information
- **Nama Perusahaan** (Company Name)
- **Tagline Perusahaan** (Company Tagline)
- **Deskripsi Perusahaan** (Company Description)

### Contact Information
- **Email** - Contact email
- **Alamat** (Address)
- **Nomor Telepon** (Phone Numbers - up to 3 with labels)
- **Nomor WhatsApp** (WhatsApp Number)

### Operating Hours
- **Jam Operasional Weekday** (Mon-Fri Hours)
- **Jam Operasional Saturday** (Sat Hours)
- **Jam Operasional Sunday** (Sun Hours)

### Maps Embed ⭐ IMPORTANT
- **Embed Maps** - Paste Google Maps iframe code here
- To get embed code:
  1. Go to Google Maps
  2. Find your location
  3. Click "Share" → "Embed a map"
  4. Copy the full `<iframe>` code
  5. Paste it here
  6. Maps will appear on your Contact page!

### About Page Content
- **Judul Tentang** (About Title)
- **Konten Tentang** (About Content)
- **Konten Prakata** (Preface Content)

### Partnership Statistics
- **Toko Ritel** (Retail Stores)
- **Reseller Count**
- **Restoran** (Restaurants)
- **Central Kitchen Count**
- **Catering Count**
- **SPPG** (Special Purpose)

### Social Media Links
- **Instagram**
- **Facebook**
- **TikTok**
- **YouTube**

3. Scroll to the bottom
4. Click **💾 Simpan Pengaturan** (Save Settings)
5. Changes appear on website immediately!

---

## ✨ Pro Tips

### Product Tips
- Use clear, descriptive names for products
- Add detailed descriptions mentioning benefits and uses
- Upload good quality product images (landscape orientation recommended)
- Price should be in Rupiah (e.g., 150000 for Rp 150.000)
- Can't add product? Make sure at least one category exists first!

### Settings Tips
- **Maps are essential** - Don't forget to add your maps embed code!
- **Keep descriptions short** - Long text may not fit well on homepage
- **Use ALL three phone numbers** if available - helps customers reach you
- **Update operational hours** - Customers check this frequently
- **Add social media links** - Important for customer engagement

### Organization Tips
- Use consistent category names
- Archive old testimonials instead of deleting
- Keep product prices up to date
- Regularly review active/inactive status

---

## 🆘 Troubleshooting

### Product not appearing on website?
- Check if product is **Aktif** (Active)
- Check if category is **Aktif** (Active)
- Wait a few seconds for page to refresh

### Images not uploading?
- Check file format (JPG, PNG, or GIF only)
- Check file size (should be under 2MB)
- Try refresh browser cache (Ctrl+Shift+R)

### Changes not appearing on website?
- Clear browser cache (Ctrl+Shift+R)
- Wait a few seconds and refresh
- Check if status is Active

### Can't log in?
- Verify username and password
- Check if admin authentication is enabled
- Clear browser cookies and try again

---

## 📞 Need Help?

If something isn't working:
1. Check this guide first
2. Try refreshing the page
3. Clear browser cache
4. Log out and log back in
5. Contact developer if issue persists

---

## 🚀 Quick Checklist for New Users

- [ ] Log in to admin panel
- [ ] Go to **Pengaturan** and update company information
- [ ] Add Google Maps embed code
- [ ] Add at least one Category
- [ ] Add at least one Product with image
- [ ] Add at least one Testimonial
- [ ] Visit website and verify all changes appear
- [ ] Test maps appear on Contact page
- [ ] Share credentials with team members who need access

---

**Admin Panel Status: ✅ READY TO USE**

All features are working and production-ready!
You can manage your entire website from here. 🎉

---

*Last Updated: 2024*
*Version: 2.1 Professional Edition*
