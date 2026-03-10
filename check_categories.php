<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;

// List semua kategori
$all = Category::all();
echo "Total kategori: " . count($all) . "\n\n";
foreach ($all as $cat) {
    echo "ID: {$cat->id} | Name: {$cat->name} | Slug: {$cat->slug} | Image: {$cat->image}\n";
}
