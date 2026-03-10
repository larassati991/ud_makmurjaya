<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;

// Insert Daging Kerbau dan Olahan
$newCategories = [
    [
        'name' => 'Daging Kerbau',
        'slug' => 'daging-kerbau',
        'description' => 'Daging kerbau premium dengan berbagai pilihan potongan untuk kebutuhan bisnis kuliner Anda.',
        'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=800&h=600&fit=crop',
        'order' => 4,
        'is_active' => true
    ],
    [
        'name' => 'Olahan',
        'slug' => 'olahan',
        'description' => 'Berbagai bahan baku olahan seperti mixed vegetable, kentang, dan olahan daging. Melengkapi kebutuhan untuk bisnis F&B Anda.',
        'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&h=600&fit=crop',
        'order' => 5,
        'is_active' => true
    ],
];

foreach ($newCategories as $cat) {
    $check = Category::where('slug', $cat['slug'])->exists();
    if (!$check) {
        Category::create($cat);
        echo "✓ {$cat['name']} ditambahkan\n";
    } else {
        echo "~ {$cat['name']} sudah ada\n";
    }
}

echo "\n✓ Selesai!\n";
