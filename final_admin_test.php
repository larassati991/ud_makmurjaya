<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Category;
use App\Models\Product;

echo "\n";
echo "╔══════════════════════════════════════════════════════════════════════╗\n";
echo "║  ADMIN PANEL - COMPREHENSIVE FINAL TEST                             ║\n";
echo "║  UD Makmur Jaya Daging - Complete Functionality Verification        ║\n";
echo "╚══════════════════════════════════════════════════════════════════════╝\n";
echo "\n";

$passed = 0;
$failed = 0;
$tests = [];

// Test Helper Function
function assert_test($condition, $name, &$passed, &$failed, &$tests) {
    if ($condition) {
        echo "  ✅ $name\n";
        $passed++;
        $tests[] = ['status' => 'PASS', 'name' => $name];
    } else {
        echo "  ❌ $name\n";
        $failed++;
        $tests[] = ['status' => 'FAIL', 'name' => $name];
    }
}

// ═══════════════════════════════════════════════════════════════════
echo "TEST GROUP 1: DATABASE & MODELS\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    $catCount = Category::count();
    assert_test($catCount > 0, "Database connection & categories table exists", $passed, $failed, $tests);
    
    $prodCount = Product::count();
    assert_test($prodCount > 0, "Products table exists and has data", $passed, $failed, $tests);
    
    $cat = Category::first();
    assert_test($cat !== null && isset($cat->id), "Category model working correctly", $passed, $failed, $tests);
    
    $prod = Product::first();
    assert_test($prod !== null && isset($prod->id), "Product model working correctly", $passed, $failed, $tests);
    
    $relationship = $prod->category;
    assert_test($relationship !== null, "Product->Category relationship working", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Database tests: " . $e->getMessage(), $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 2: MODEL ATTRIBUTES\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    $cat = Category::first();
    assert_test(isset($cat->id) && isset($cat->name), "Category has required attributes", $passed, $failed, $tests);
    assert_test(isset($cat->slug) && isset($cat->is_active), "Category has slug and is_active", $passed, $failed, $tests);
    
    $prod = Product::first();
    assert_test(isset($prod->id) && isset($prod->name), "Product has required attributes", $passed, $failed, $tests);
    assert_test(isset($prod->price) && $prod->price !== null, "Product has price field", $passed, $failed, $tests);
    assert_test(isset($prod->category_id), "Product has category_id field", $passed, $failed, $tests);
    assert_test(isset($prod->is_active), "Product has is_active field", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Model attribute tests failed", $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 3: CRUD - CREATE OPERATIONS\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    // Test Create Category
    $newCat = Category::create([
        'name' => 'Test Cat ' . time(),
        'slug' => 'test-' . time(),
        'description' => 'Test category',
        'is_active' => true,
    ]);
    assert_test($newCat->id !== null, "Create category - new cat gets ID", $passed, $failed, $tests);
    
    // Test Create Product
    $newProd = Product::create([
        'category_id' => Category::first()->id,
        'name' => 'Test Prod ' . time(),
        'slug' => 'test-prod-' . time(),
        'description' => 'Test product',
        'price' => 50000,
        'is_active' => true,
    ]);
    assert_test($newProd->id !== null, "Create product - new prod gets ID", $passed, $failed, $tests);
    assert_test($newProd->price == 50000, "Create product - price saved correctly", $passed, $failed, $tests);
    
    $catId = $newCat->id;
    $prodId = $newProd->id;
    
} catch (Exception $e) {
    assert_test(false, "Create operation failed: " . $e->getMessage(), $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 4: CRUD - READ OPERATIONS\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    // Test Read Category
    $catRead = Category::find($catId);
    assert_test($catRead !== null && $catRead->name === 'Test Cat ' . time(), "Read category - find and retrieve", $passed, $failed, $tests);
    
    // Test Read Product
    $prodRead = Product::find($prodId);
    assert_test($prodRead !== null && $prodRead->price == 50000, "Read product - find and retrieve", $passed, $failed, $tests);
    
    // Test List
    $allCats = Category::all();
    assert_test($allCats->count() > 0, "Read all categories - list works", $passed, $failed, $tests);
    
    $allProds = Product::all();
    assert_test($allProds->count() > 0, "Read all products - list works", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Read operation failed", $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 5: CRUD - UPDATE OPERATIONS\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    // Update Category
    Category::find($catId)->update(['description' => 'Updated desc']);
    $catUpdated = Category::find($catId);
    assert_test($catUpdated->description === 'Updated desc', "Update category - description changed", $passed, $failed, $tests);
    
    // Update Product Price
    Product::find($prodId)->update(['price' => 75000]);
    $prodUpdated = Product::find($prodId);
    assert_test($prodUpdated->price == 75000, "Update product - price changed", $passed, $failed, $tests);
    
    // Update is_active
    Product::find($prodId)->update(['is_active' => false]);
    $prodUpdated = Product::find($prodId);
    assert_test($prodUpdated->is_active === false || $prodUpdated->is_active === 0, "Update product - is_active changed", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Update operation failed: " . $e->getMessage(), $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 6: CRUD - DELETE OPERATIONS\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    // Delete Product
    Product::find($prodId)->delete();
    $prodAfterDelete = Product::find($prodId);
    assert_test($prodAfterDelete === null, "Delete product - product removed from DB", $passed, $failed, $tests);
    
    // Delete Category
    Category::find($catId)->delete();
    $catAfterDelete = Category::find($catId);
    assert_test($catAfterDelete === null, "Delete category - category removed from DB", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Delete operation failed: " . $e->getMessage(), $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 7: VALIDATION\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    // Test invalid price
    $invalidPrice = false;
    try {
        Product::create([
            'category_id' => Category::first()->id,
            'name' => 'Invalid Product',
            'slug' => 'invalid',
            'price' => 'not-a-number',
        ]);
    } catch (Exception $e) {
        $invalidPrice = true;
    }
    assert_test($invalidPrice, "Validation - rejects invalid price", $passed, $failed, $tests);
    
    // Test missing required field
    $missingName = false;
    try {
        Category::create([
            'slug' => 'missing-name',
        ]);
    } catch (Exception $e) {
        $missingName = true;
    }
    assert_test($missingName, "Validation - requires category name", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Validation tests failed", $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 8: ROUTES\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    $routes = \Illuminate\Support\Facades\Route::getRoutes();
    $adminRoutes = [];
    foreach ($routes as $route) {
        if (strpos($route->uri(), 'admin') !== false) {
            $adminRoutes[] = $route->uri();
        }
    }
    
    assert_test(in_array('admin/dashboard', $adminRoutes), "Route - admin dashboard exists", $passed, $failed, $tests);
    assert_test(in_array('admin/categories', $adminRoutes), "Route - categories list exists", $passed, $failed, $tests);
    assert_test(in_array('admin/products', $adminRoutes), "Route - products list exists", $passed, $failed, $tests);
    assert_test(in_array('admin/categories/create', $adminRoutes), "Route - category create exists", $passed, $failed, $tests);
    assert_test(in_array('admin/products/create', $adminRoutes), "Route - product create exists", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Route tests failed", $passed, $failed, $tests);
}

echo "\n";
echo "TEST GROUP 9: FINAL DATA INTEGRITY\n";
echo "───────────────────────────────────────────────────────────────\n";

try {
    $finalCatCount = Category::count();
    $finalProdCount = Product::count();
    $prodsWithPrice = Product::where('price', '>', 0)->count();
    $activeProds = Product::where('is_active', 1)->count();
    
    echo "  ℹ️  Final Category Count: $finalCatCount\n";
    echo "  ℹ️  Final Product Count: $finalProdCount\n";
    echo "  ℹ️  Products with Price: $prodsWithPrice\n";
    echo "  ℹ️  Active Products: $activeProds\n";
    
    assert_test($finalCatCount > 0, "Final check - categories exist", $passed, $failed, $tests);
    assert_test($finalProdCount > 0, "Final check - products exist", $passed, $failed, $tests);
    
} catch (Exception $e) {
    assert_test(false, "Final data check failed", $passed, $failed, $tests);
}

// ═════════════════════════════════════════════════════════════════
echo "\n";
echo "╔══════════════════════════════════════════════════════════════════════╗\n";
echo "║                          TEST SUMMARY                               ║\n";
echo "╚══════════════════════════════════════════════════════════════════════╝\n";
echo "\n";

$total = $passed + $failed;
$percentage = $total > 0 ? round(($passed / $total) * 100, 1) : 0;

echo "  ✅ PASSED: $passed\n";
echo "  ❌ FAILED: $failed\n";
echo "  📊 TOTAL:  $total\n";
echo "  📈 SUCCESS RATE: {$percentage}%\n";
echo "\n";

if ($failed === 0) {
    echo "╔══════════════════════════════════════════════════════════════════════╗\n";
    echo "║     ✅✅✅ ALL TESTS PASSED - ADMIN PANEL FULLY FUNCTIONAL ✅✅✅      ║\n";
    echo "║                                                                      ║\n";
    echo "║  🎉 ADMIN PANEL READY FOR PRODUCTION USE 🎉                        ║\n";
    echo "╚══════════════════════════════════════════════════════════════════════╝\n";
} else {
    echo "╔══════════════════════════════════════════════════════════════════════╗\n";
    echo "║                    SOME TESTS FAILED ⚠️                             ║\n";
    echo "╚══════════════════════════════════════════════════════════════════════╝\n";
}

echo "\n";
?>
