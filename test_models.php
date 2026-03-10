<?php

require __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';

// Create kernel
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

// Create a test request
$request = \Illuminate\Http\Request::capture();

try {
    // Test models loading
    echo "Testing models...\n";
    echo "- Category::count() = " . \App\Models\Category::count() . "\n";
    echo "- Product::count() = " . \App\Models\Product::count() . "\n";
    echo "- Setting::count() = " . \App\Models\Setting::count() . "\n";
    echo "- User::count() = " . \App\Models\User::count() . "\n";
    
    // Test Setting retrieval
    echo "\nTesting Setting::get()...\n";
    $setting = \App\Models\Setting::get('whatsapp_number');
    echo "WhatsApp Number: " . ($setting ?? 'NOT FOUND') . "\n";
    
    $company = \App\Models\Setting::get('company_name');
    echo "Company Name: " . ($company ?? 'NOT SET') . "\n";
    
    echo "\n✓ All tests passed!\n";
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
