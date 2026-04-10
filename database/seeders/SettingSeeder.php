<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Company Info
            ['key' => 'company_name', 'value' => 'UD MAKMUR JAYA DAGING', 'type' => 'text'],
            ['key' => 'company_tagline', 'value' => 'Siap Suplai Daging ke Seluruh Indonesia', 'type' => 'text'],
            ['key' => 'company_description', 'value' => 'UD MAKMUR JAYA DAGING menyediakan berbagai pilihan daging lokal dan impor', 'type' => 'textarea'],
            
            // Contact Info
            ['key' => 'phone_1', 'value' => '+62 852-2546-1504', 'type' => 'text'],
            ['key' => 'phone_1_label', 'value' => 'Informasi Pricelist & Order Retail', 'type' => 'text'],
            
            ['key' => 'phone_2', 'value' => '+62 852-2546-1504', 'type' => 'text'],
            ['key' => 'phone_2_label', 'value' => 'Info Kerjasama', 'type' => 'text'],
            
            ['key' => 'phone_3', 'value' => '+62 852-2546-1504', 'type' => 'text'],
            ['key' => 'phone_3_label', 'value' => 'Info Pengaduan', 'type' => 'text'],
            
            ['key' => 'whatsapp_number', 'value' => '+62 852-2546-1504', 'type' => 'text'],
            ['key' => 'email', 'value' => 'info@udmakmurjaya.com', 'type' => 'text'],
            
            // Address
            ['key' => 'address', 'value' => 'Jl. Contoh Alamat No. 123, Kota, Provinsi', 'type' => 'textarea'],
            ['key' => 'maps_embed', 'value' => '', 'type' => 'textarea'],
            
            // Social Media
            ['key' => 'instagram', 'value' => 'https://instagram.com/udmakmurjaya', 'type' => 'text'],
            ['key' => 'facebook', 'value' => 'https://facebook.com/udmakmurjaya', 'type' => 'text'],
            ['key' => 'tiktok', 'value' => 'https://tiktok.com/@udmakmurjaya', 'type' => 'text'],
            ['key' => 'youtube', 'value' => 'https://youtube.com/@udmakmurjaya', 'type' => 'text'],
            
            // Operational Hours
            ['key' => 'operational_weekday', 'value' => '08.00 - 17.00 WIB (Senin - Jumat)', 'type' => 'text'],
            ['key' => 'operational_saturday', 'value' => '08.00 - 16.00 WIB (Sabtu)', 'type' => 'text'],
            ['key' => 'operational_sunday', 'value' => 'Minggu & Tanggal Merah Tutup', 'type' => 'text'],
            
            // Statistics
            ['key' => 'total_partners', 'value' => '100', 'type' => 'text'],
            ['key' => 'partner_toko_ritel', 'value' => '20', 'type' => 'text'],
            ['key' => 'partner_reseller', 'value' => '30', 'type' => 'text'],
            ['key' => 'partner_restaurant', 'value' => '25', 'type' => 'text'],
            ['key' => 'partner_catering', 'value' => '15', 'type' => 'text'],
            ['key' => 'partner_central_kitchen', 'value' => '5', 'type' => 'text'],
            ['key' => 'partner_sppg', 'value' => '5', 'type' => 'text'],
            
            // About
            ['key' => 'about_title', 'value' => 'Tentang UD MAKMUR JAYA DAGING', 'type' => 'text'],
            ['key' => 'about_content', 'value' => 'Kami adalah perusahaan yang bergerak di bidang penyediaan daging berkualitas untuk berbagai kebutuhan bisnis kuliner Anda.', 'type' => 'textarea'],
            
            // Prakata
            ['key' => 'prakata_content', 'value' => 'Sejak berdiri, UD MAKMUR JAYA DAGING telah dipercaya oleh banyak mitra bisnis. Komitmen kami adalah menjaga kualitas dan higienitas produk daging hingga sampai ke tangan Mitra.', 'type' => 'textarea'],
            
            // Halal Certificate
            ['key' => 'halal_certificate_no', 'value' => '', 'type' => 'text'],
            ['key' => 'halal_certificate_image', 'value' => '', 'type' => 'image'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}