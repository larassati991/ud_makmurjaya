<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;

// Update Daging Kerbau dengan image dari Unsplash yang baru
$category = Category::where('name', 'Daging Kerbau')->first();
if ($category) {
    $category->update([
        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25181cdc5?w=800&h=600&fit=crop'
    ]);
    echo "✓ Daging Kerbau updated dengan image raw meat\n";
    echo "Image: " . $category->image . "\n";
} else {
    echo "✗ Kategori Daging Kerbau tidak ditemukan\n";
}
