<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\Category;

// Quick test
$categoryCount = Category::count();
$productCount = Product::count();
$productsWithPrice = Product::where('price', '>', 0)->count();

echo "Categories: $categoryCount\n";
echo "Products: $productCount\n"; 
echo "Products with Price: $productsWithPrice\n";

if ($categoryCount > 0 && $productCount > 0) {
    echo "\n✓ Admin panel data is ready!\n";
} else {
    echo "\n✗ Need to run seeders\n";
}
?>
