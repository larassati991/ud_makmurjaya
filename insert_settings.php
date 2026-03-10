<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

$settings = [
    ['key' => 'company_name', 'value' => 'UD MAKMUR JAYA DAGING', 'type' => 'text'],
    ['key' => 'company_tagline', 'value' => 'Siap Suplai Daging ke Seluruh Indonesia', 'type' => 'text'],
    ['key' => 'company_description', 'value' => 'UD MAKMUR JAYA DAGING menyediakan berbagai pilihan daging lokal dan impor', 'type' => 'textarea'],
    ['key' => 'phone_1', 'value' => '081234567890', 'type' => 'text'],
    ['key' => 'phone_1_label', 'value' => 'Informasi Pricelist & Order Retail', 'type' => 'text'],
    ['key' => 'phone_2', 'value' => '081234567891', 'type' => 'text'],
    ['key' => 'phone_2_label', 'value' => 'Info Kerjasama', 'type' => 'text'],
    ['key' => 'phone_3', 'value' => '081234567892', 'type' => 'text'],
    ['key' => 'phone_3_label', 'value' => 'Info Pengaduan', 'type' => 'text'],
    ['key' => 'whatsapp_number', 'value' => '6281234567890', 'type' => 'text'],
    ['key' => 'email', 'value' => 'info@udmakmurjaya.com', 'type' => 'text'],
    ['key' => 'address', 'value' => 'Jl. Contoh Alamat No. 123, Kota, Provinsi', 'type' => 'textarea'],
    ['key' => 'maps_embed', 'value' => '', 'type' => 'textarea'],
    ['key' => 'instagram', 'value' => 'https://instagram.com/udmakmurjaya', 'type' => 'text'],
    ['key' => 'facebook', 'value' => 'https://facebook.com/udmakmurjaya', 'type' => 'text'],
    ['key' => 'tiktok', 'value' => 'https://tiktok.com/@udmakmurjaya', 'type' => 'text'],
    ['key' => 'youtube', 'value' => 'https://youtube.com/@udmakmurjaya', 'type' => 'text'],
    ['key' => 'operational_weekday', 'value' => '08.00 - 17.00 WIB (Senin - Jumat)', 'type' => 'text'],
    ['key' => 'operational_saturday', 'value' => '08.00 - 16.00 WIB (Sabtu)', 'type' => 'text'],
    ['key' => 'operational_sunday', 'value' => 'Minggu & Tanggal Merah Tutup', 'type' => 'text'],
    ['key' => 'total_partners', 'value' => '100', 'type' => 'text'],
    ['key' => 'partner_toko_ritel', 'value' => '20', 'type' => 'text'],
    ['key' => 'partner_reseller', 'value' => '30', 'type' => 'text'],
    ['key' => 'partner_restaurant', 'value' => '25', 'type' => 'text'],
    ['key' => 'partner_catering', 'value' => '15', 'type' => 'text'],
    ['key' => 'partner_central_kitchen', 'value' => '5', 'type' => 'text'],
    ['key' => 'partner_sppg', 'value' => '5', 'type' => 'text'],
    ['key' => 'about_title', 'value' => 'Tentang UD MAKMUR JAYA DAGING', 'type' => 'text'],
    ['key' => 'about_content', 'value' => 'Kami adalah perusahaan yang bergerak di bidang penyediaan daging berkualitas untuk berbagai kebutuhan bisnis kuliner Anda.', 'type' => 'textarea'],
    ['key' => 'prakata_content', 'value' => 'Sejak berdiri, UD MAKMUR JAYA DAGING telah dipercaya oleh banyak mitra bisnis. Komitmen kami adalah menjaga kualitas dan higienitas produk daging hingga sampai ke tangan Mitra.', 'type' => 'textarea'],
];

$sql = 'INSERT INTO settings (`key`, `value`, `type`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())';
$stmt = $pdo->prepare($sql);

foreach ($settings as $setting) {
    $stmt->execute([$setting['key'], $setting['value'], $setting['type']]);
}

echo "✓ " . count($settings) . " settings inserted successfully!\n";
