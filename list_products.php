<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

$products = Product::all();
echo "All Products in Database:\n";
foreach ($products as $p) {
    echo "- ID: " . $p->id . " | Name: " . $p->name . " | Price: " . ($p->price ?? 'NULL') . " | Category: " . $p->category_id . "\n";
}
?>
