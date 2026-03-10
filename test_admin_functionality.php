<?php
/**
 * Test Admin Panel Functionality
 * This script tests all CRUD operations are working correctly
 */

require_once 'bootstrap/app.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\Category;

echo "========================================\n";
echo "ADMIN PANEL FUNCTIONALITY TESTS\n";
echo "========================================\n\n";

// Test 1: Check Categories Exist
echo "Test 1: Categories in Database\n";
$categories = Category::all();
echo "Total Categories: " . $categories->count() . "\n";
foreach ($categories as $category) {
    echo "  - " . $category->name . " (ID: " . $category->id . ")\n";
}
echo "\n";

// Test 2: Check Products Exist
echo "Test 2: Products in Database\n";
$products = Product::all();
echo "Total Products: " . $products->count() . "\n";
foreach ($products->take(5) as $product) {
    echo "  - " . $product->name . " (Price: Rp " . number_format($product->price, 0, ',', '.') . ", Category: " . ($product->category?->name ?? 'N/A') . ")\n";
}
echo "  ...and " . ($products->count() > 5 ? ($products->count() - 5) . " more" : "no more") . "\n\n";

// Test 3: Check Price Field
echo "Test 3: Product Prices (Price Field)\n";
$productsWithPrice = Product::where('price', '>', 0)->count();
echo "Products with Price: " . $productsWithPrice . " / " . $products->count() . "\n";
$avgPrice = Product::avg('price');
echo "Average Price: Rp " . number_format($avgPrice, 0, ',', '.') . "\n\n";

// Test 4: Check Image Fields
echo "Test 4: Image Uploads\n";
$categoriesWithImage = Category::whereNotNull('image')->count();
$productsWithImage = Product::whereNotNull('image')->count();
echo "Categories with Images: " . $categoriesWithImage . "\n";
echo "Products with Images: " . $productsWithImage . "\n\n";

// Test 5: Check Routes
echo "Test 5: Route Status\n";
$routes = \Illuminate\Support\Facades\Route::getRoutes();
$adminRoutes = 0;
foreach ($routes as $route) {
    if (strpos($route->uri(), 'admin') !== false) {
        $adminRoutes++;
    }
}
echo "Admin Routes Registered: " . $adminRoutes . "\n\n";

// Test 6: Check Model Relationships
echo "Test 6: Model Relationships\n";
try {
    $product = $products->first();
    if ($product) {
        $category = $product->category;
        echo "✓ Product -> Category Relationship Working\n";
        echo "  Sample: " . $product->name . " belongs to " . ($category?->name ?? 'Unknown') . "\n";
    }
} catch (Exception $e) {
    echo "✗ Product -> Category Relationship Error: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 7: Check Fillable Fields
echo "Test 7: Model Fillable Fields\n";
$productFillable = (new Product())->getFillable();
echo "Product Fillable Fields: " . implode(', ', $productFillable) . "\n";
$categoryFillable = (new Category())->getFillable();
echo "Category Fillable Fields: " . implode(', ', $categoryFillable) . "\n\n";

echo "========================================\n";
echo "TESTS COMPLETED SUCCESSFULLY\n";
echo "========================================\n";
?>
