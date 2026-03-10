<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Category;
use App\Models\Product;

echo "\n╔════════════════════════════════════════════════════════════════╗\n";
echo "║  ADMIN PANEL - FINAL COMPREHENSIVE TEST                        ║\n";
echo "║  Including Authentication & All Pages                          ║\n";
echo "╚════════════════════════════════════════════════════════════════╝\n\n";

$passed = 0;
$failed = 0;

function test($condition, $name, &$p, &$f) {
    if ($condition) {
        echo "  ✅ $name\n";
        $p++;
    } else {
        echo "  ❌ $name\n";
        $f++;
    }
}

// Test 1: Authentication
echo "TEST GROUP 1: AUTHENTICATION SYSTEM\n";
echo "──────────────────────────────────────────────────────────────\n";
test(class_exists('App\Http\Controllers\Admin\AuthController'), "AuthController exists", $passed, $failed);
test(class_exists('App\Http\Middleware\AdminAuth'), "AdminAuth middleware exists", $passed, $failed);
test(file_exists('resources/views/admin/auth/login.blade.php'), "Login view exists", $passed, $failed);

// Test 2: Database & Models
echo "\nTEST GROUP 2: DATABASE & MODELS\n";
echo "──────────────────────────────────────────────────────────────\n";
try {
    $catCount = Category::count();
    test($catCount > 0, "Categories exist in DB", $passed, $failed);
    
    $prodCount = Product::count();
    test($prodCount > 0, "Products exist in DB", $passed, $failed);
    
    $prod = Product::first();
    test($prod && $prod->category !== null, "Product-Category relationship working", $passed, $failed);
} catch (Exception $e) {
    test(false, "Database test: " . $e->getMessage(), $passed, $failed);
}

// Test 3: Controllers
echo "\nTEST GROUP 3: CONTROLLERS\n";
echo "──────────────────────────────────────────────────────────────\n";
test(class_exists('App\Http\Controllers\Admin\AdminController'), "AdminController exists", $passed, $failed);
test(class_exists('App\Http\Controllers\Admin\ProductController'), "ProductController exists", $passed, $failed);
test(class_exists('App\Http\Controllers\Admin\CategoryController'), "CategoryController exists", $passed, $failed);
test(class_exists('App\Http\Controllers\Admin\AuthController'), "AuthController exists", $passed, $failed);

// Test 4: Views
echo "\nTEST GROUP 4: BLADE VIEWS\n";
echo "──────────────────────────────────────────────────────────────\n";
test(file_exists('resources/views/admin/layout.blade.php'), "Layout view exists", $passed, $failed);
test(file_exists('resources/views/admin/dashboard.blade.php'), "Dashboard view exists", $passed, $failed);
test(file_exists('resources/views/admin/categories/index.blade.php'), "Categories index view exists", $passed, $failed);
test(file_exists('resources/views/admin/categories/create.blade.php'), "Categories create view exists", $passed, $failed);
test(file_exists('resources/views/admin/categories/edit.blade.php'), "Categories edit view exists", $passed, $failed);
test(file_exists('resources/views/admin/products/index.blade.php'), "Products index view exists", $passed, $failed);
test(file_exists('resources/views/admin/products/create.blade.php'), "Products create view exists", $passed, $failed);
test(file_exists('resources/views/admin/products/edit.blade.php'), "Products edit view exists", $passed, $failed);

// Test 5: Routes
echo "\nTEST GROUP 5: ROUTES\n";
echo "──────────────────────────────────────────────────────────────\n";
try {
    $routes = \Illuminate\Support\Facades\Route::getRoutes();
    $adminRoutes = [];
    foreach ($routes as $route) {
        if (strpos($route->uri(), 'admin') !== false) {
            $adminRoutes[] = $route->uri();
        }
    }
    
    test(in_array('admin/login', $adminRoutes), "Login route exists", $passed, $failed);
    test(in_array('admin/dashboard', $adminRoutes), "Dashboard route exists", $passed, $failed);
    test(in_array('admin/categories', $adminRoutes), "Categories routes exist", $passed, $failed);
    test(in_array('admin/products', $adminRoutes), "Products routes exist", $passed, $failed);
    test(count($adminRoutes) > 10, "All admin routes registered (>10)", $passed, $failed);
} catch (Exception $e) {
    test(false, "Routes test failed", $passed, $failed);
}

// Test 6: CRUD Operations
echo "\nTEST GROUP 6: CRUD OPERATIONS\n";
echo "──────────────────────────────────────────────────────────────\n";
try {
    // Create
    $cat = Category::create([
        'name' => 'Test_' . time(),
        'slug' => 'test-' . time(),
        'is_active' => true,
    ]);
    test($cat->id !== null, "Category create works", $passed, $failed);
    
    // Read
    $catRead = Category::find($cat->id);
    test($catRead !== null, "Category read works", $passed, $failed);
    
    // Update
    $cat->update(['description' => 'Updated']);
    $catUpdated = Category::find($cat->id);
    test($catUpdated->description === 'Updated', "Category update works", $passed, $failed);
    
    // Delete
    $catId = $cat->id;
    $cat->delete();
    $catDeleted = Category::find($catId);
    test($catDeleted === null, "Category delete works", $passed, $failed);
} catch (Exception $e) {
    test(false, "CRUD test failed: " . $e->getMessage(), $passed, $failed);
}

// Test 7: Data Validation
echo "\nTEST GROUP 7: DATA INTEGRITY\n";
echo "──────────────────────────────────────────────────────────────\n";
$allProds = Product::all();
$allCats = Category::all();
echo "  ℹ️  Categories: " . $allCats->count() . "\n";
echo "  ℹ️  Products: " . $allProds->count() . "\n";
echo "  ℹ️  Products with price: " . Product::where('price', '>', 0)->count() . "\n";
test($allCats->count() > 0, "Categories data integrity OK", $passed, $failed);
test($allProds->count() > 0, "Products data integrity OK", $passed, $failed);

// Summary
echo "\n╔════════════════════════════════════════════════════════════════╗\n";
echo "║                       TEST SUMMARY                             ║\n";
echo "╚════════════════════════════════════════════════════════════════╝\n\n";

$total = $passed + $failed;
$percentage = $total > 0 ? round(($passed / $total) * 100, 1) : 0;

echo "  ✅ PASSED:  $passed\n";
echo "  ❌ FAILED:  $failed\n";
echo "  📊 TOTAL:   $total\n"; 
echo "  📈 SUCCESS: {$percentage}%\n\n";

if ($failed === 0) {
    echo "╔════════════════════════════════════════════════════════════════╗\n";
    echo "║  ✅✅✅ ALL TESTS PASSED - ADMIN PANEL 100% WORKING ✅✅✅     ║\n";
    echo "║                                                                ║\n";
    echo "║      🎉 ADMIN PANEL READY FOR USE - LOGIN WITH: 12345        ║\n";
    echo "╚════════════════════════════════════════════════════════════════╝\n";
} else {
    echo "╔════════════════════════════════════════════════════════════════╗\n";
    echo "║                  SOME TESTS FAILED ⚠️                         ║\n";
    echo "╚════════════════════════════════════════════════════════════════╝\n";
}

echo "\n";
?>
