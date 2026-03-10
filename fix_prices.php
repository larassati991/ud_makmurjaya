<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

// Update products without price
Product::whereNull('price')->update(['price' => 0]);
Product::where('name', 'Daging Sapi Slice (Per KG)')->update(['price' => 140000]);
Product::where('name', 'Bebek Peking')->update(['price' => 120000]);

echo "✓ All products updated with prices\n";
$productsWithPrice = Product::where('price', '>', 0)->count();
echo "Products with price: " . $productsWithPrice . " / " . Product::count() . "\n";
?>
