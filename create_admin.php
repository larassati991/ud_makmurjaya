<?php

// Load Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

// Register facades
$facade = $app->make('Illuminate\Contracts\Foundation\Application');

// Create admin user  
try {
    $user = \App\Models\User::create([
        'name' => 'Admin UD Makmur Jaya',
        'email' => 'admin@udmakmurjaya.com',
        'password' => bcrypt('admin123'),
    ]);
    
    echo "✓ Admin user created successfully!\n";
    echo "Email: admin@udmakmurjaya.com\n";
    echo "Password: admin123\n";
    
} catch (\Exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        echo "✓ Admin user already exists\n";
    } else {
        echo "✗ Error: " . $e->getMessage() . "\n";
    }
}
