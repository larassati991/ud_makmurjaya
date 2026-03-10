<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Test koneksi database langsung
$pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

echo "✓ Database connected\n\n";

// Test query langsung
$result = $pdo->query("SELECT * FROM settings WHERE `key` = 'company_tagline'");
$row = $result->fetch();
if ($row) {
    echo "✓ Setting found:\n";
    echo "  Value: " . $row['value'] . "\n";
} else {
    echo "✗ Setting NOT found\n";
}

// TEST LARAVEL APP
echo "\n\nTesting Laravel App:\n";

$app = require __DIR__ . '/bootstrap/app.php';

try {
    $app->make('Illuminate\Contracts\Http\Kernel');
    echo "✓ Laravel Kernel loaded\n";
    
    // Check if Model exists
    if (class_exists('App\Models\Setting')) {
        echo "✓ Setting model found\n";
        
        // Get config untuk check method
        $reflection = new ReflectionClass('App\Models\Setting');
        $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_STATIC);
        echo "  Static methods:\n";
        foreach ($methods as $method) {
            if ($method->getName() === 'get' || $method->getName() === 'getValue') {
                echo "    - " . $method->getName() . "()\n";
            }
        }
    } else {
        echo "✗ Setting model NOT found\n";
    }
    
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
?>
