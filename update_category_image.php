<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;

// Update semua kategori dengan image default dari Unsplash
$updates = [
    'Daging Bebek' => 'https://images.unsplash.com/photo-1598668959228-3ffc79b10f34?w=800&h=600&fit=crop', // Roasted duck
    'Daging Sapi' => 'https://images.unsplash.com/photo-1432139555190-58524dae6a55?w=800&h=600&fit=crop', // Beef
    'Daging Kambing' => 'https://images.unsplash.com/photo-1555939594-58d7cb561fda?w=800&h=600&fit=crop', // Lamb chops
    'Daging Kerbau' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=800&h=600&fit=crop', // Buffalo steak
];

foreach ($updates as $name => $imageUrl) {
    $category = Category::where('name', $name)->first();
    if ($category) {
        $category->update(['image' => $imageUrl]);
        echo "✓ {$name} updated dengan image\n";
    }
}

echo "\n✓ Semua kategori sudah update dengan image!\n";
