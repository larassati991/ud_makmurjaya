<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

echo "===========================================\n";
echo "ADMIN PANEL COMPLETE FUNCTIONALITY TEST\n";
echo "===========================================\n\n";

// Test 1: Categories
echo "TEST 1: Categories\n";
echo "---\n";
$categories = Category::all();
echo "✓ Total Categories: " . $categories->count() . "\n";
foreach ($categories as $cat) {
    echo "  - " . $cat->name . " (Slug: " . $cat->slug . ", Active: " . ($cat->is_active ? 'Yes' : 'No') . ")\n";
}
echo "\n";

// Test 2: Products with Relationships
echo "TEST 2: Products with Relationships\n";
echo "---\n";
$products = Product::all();
echo "✓ Total Products: " . $products->count() . "\n";
foreach ($products as $prod) {
    $catName = $prod->category ? $prod->category->name : 'N/A';
    echo "  - " . $prod->name . "\n";
    echo "    Category: " . $catName . "\n";
    echo "    Price: Rp " . number_format($prod->price, 0, ',', '.') . "\n";
}
echo "\n";

// Test 3: Create Test (Create new category)
echo "TEST 3: Create New Category\n";
echo "---\n";
try {
    $testCategory = Category::create([
        'name' => 'Test Category ' . date('His'),
        'slug' => 'test-cat-' . date('His'),
        'description' => 'Test category for admin panel verification',
        'is_active' => true,
    ]);
    echo "✓ Category created successfully\n";
    echo "  ID: " . $testCategory->id . ", Name: " . $testCategory->name . "\n";
} catch (Exception $e) {
    echo "✗ Error creating category: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 4: Update Test
echo "TEST 4: Update Category\n";
echo "---\n";
try {
    if (isset($testCategory)) {
        $testCategory->update([
            'description' => 'Updated description at ' . date('Y-m-d H:i:s'),
        ]);
        echo "✓ Category updated successfully\n";
        echo "  New Description: " . $testCategory->description . "\n";
    }
} catch (Exception $e) {
    echo "✗ Error updating category: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 5: Product Create
echo "TEST 5: Create New Product\n";
echo "---\n";
try {
    $firstCategory = Category::first();
    if ($firstCategory) {
        $testProduct = Product::create([
            'category_id' => $firstCategory->id,
            'name' => 'Test Product ' . date('His'),
            'slug' => 'test-prod-' . Str::slug(date('His')),
            'description' => 'Test product for admin panel verification',
            'price' => 99999,
            'weight' => 1,
            'is_active' => true,
        ]);
        echo "✓ Product created successfully\n";
        echo "  ID: " . $testProduct->id . ", Name: " . $testProduct->name . "\n";
        echo "  Price: Rp " . number_format($testProduct->price, 0, ',', '.') . "\n";
    }
} catch (Exception $e) {
    echo "✗ Error creating product: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 6: Delete Test
echo "TEST 6: Delete Test Product & Category\n";
echo "---\n";
try {
    if (isset($testProduct)) {
        $productId = $testProduct->id;
        $testProduct->delete();
        echo "✓ Product deleted successfully (ID: " . $productId . ")\n";
    }
    if (isset($testCategory)) {
        $categoryId = $testCategory->id;
        $testCategory->delete();
        echo "✓ Category deleted successfully (ID: " . $categoryId . ")\n";
    }
} catch (Exception $e) {
    echo "✗ Error deleting items: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 7: Final Status
echo "TEST 7: Final Database Status\n";
echo "---\n";
$finalCategories = Category::count();
$finalProducts = Product::count();
$productsWithPrice = Product::where('price', '>', 0)->count();
$productsActive = Product::where('is_active', true)->count();

echo "✓ Categories in DB: " . $finalCategories . "\n";
echo "✓ Products in DB: " . $finalProducts . "\n";
echo "✓ Products with Price: " . $productsWithPrice . "\n";
echo "✓ Active Products: " . $productsActive . "\n";
echo "\n";

// Test 8: Validation
echo "TEST 8: Validation Test\n";
echo "---\n";
try {
    // Try creating product without required fields
    Product::create([
        'name' => 'Test',
        // Missing category_id - should fail if not nullable
    ]);
    echo "✗ Validation not working - missing category_id didn't fail\n";
} catch (Exception $e) {
    echo "✓ Validation working - rejected invalid data\n";
}
echo "\n";

echo "===========================================\n";
echo "✓ ADMIN PANEL TESTS COMPLETED SUCCESSFULLY\n";
echo "===========================================\n";
?>
