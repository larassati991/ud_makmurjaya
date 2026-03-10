<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

try {
    // Test database connection
    \Illuminate\Support\Facades\DB::connection()->getPdo();
    echo "✓ Database connection successful!\n";
    
    // Check tables
    $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
    echo "\n✓ Tables found:\n";
    foreach ($tables as $table) {
        foreach ($table as $key => $value) {
            echo "  - $value\n";
        }
    }
    
    // Check products count
    $productCount = \App\Models\Product::count();
    echo "\n✓ Products count: $productCount\n";
    
    // Check categories count
    $categoryCount = \App\Models\Category::count();
    echo "✓ Categories count: $categoryCount\n";
    
} catch (\Exception $e) {
    echo "✗ Database Error: " . $e->getMessage() . "\n";
}
