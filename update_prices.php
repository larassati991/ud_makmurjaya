<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

// Update existing products with prices
$updates = [
    'Daging Sapi Potong' => 150000,
    'Daging Ayam Utuh' => 65000,
    'Daging Bebek' => 180000,
    'Daging Kambing' => 160000,
];

foreach ($updates as $name => $price) {
    Product::where('name', 'like', '%' . $name . '%')->update(['price' => $price]);
    echo "Updated: $name -> Rp " . number_format($price, 0, ',', '.') . "\n";
}

$productsWithPrice = Product::where('price', '>', 0)->count();
echo "\nProducts with price: $productsWithPrice\n";
?>
