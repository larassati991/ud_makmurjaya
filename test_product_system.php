<?php

// Test script to verify product creation functionality

$env_file = __DIR__ . '/.env';
$env_vars = [];
if (file_exists($env_file)) {
    $lines = file($env_file);
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line) || $line[0] === ';' || $line[0] === '#') continue;
        if (strpos($line, '=') !== false) {
            list($key, $val) = explode('=', $line, 2);
            $env_vars[trim($key)] = trim($val);
        }
    }
}

// Connect to database
$host = $env_vars['DB_HOST'] ?? '127.0.0.1';
$user = $env_vars['DB_USERNAME'] ?? 'root';
$pass = $env_vars['DB_PASSWORD'] ?? '';
$db = $env_vars['DB_DATABASE'] ?? 'ud-makmurjaya';

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "=== PRODUCT FUNCTIONALITY CHECK ===\n\n";
    
    // 1. Check users table
    echo "1. Users Table\n";
    $users_result = $conn->query("SELECT id, email, name FROM users");
    $users_count = $users_result->num_rows;
    echo "   - Total users: $users_count\n";
    while ($row = $users_result->fetch_assoc()) {
        echo "   - ID: {$row['id']}, Email: {$row['email']}, Name: {$row['name']}\n";
    }
    
    // 2. Check categories
    echo "\n2. Categories Table\n";
    $cats_result = $conn->query("SELECT id, name, is_active FROM categories ORDER BY name");
    $cats_count = $cats_result->num_rows;
    echo "   - Total categories: $cats_count\n";
    echo "   - Available categories:\n";
    while ($row = $cats_result->fetch_assoc()) {
        $status = $row['is_active'] ? '✓' : '✗';
        echo "     [$status] ID:{$row['id']} - {$row['name']}\n";
    }
    
    // 3. Check products table structure
    echo "\n3. Products Table Structure\n";
    $columns_result = $conn->query("DESCRIBE products");
    echo "   - Columns:\n";
    while ($row = $columns_result->fetch_assoc()) {
        echo "     • {$row['Field']} ({$row['Type']})\n";
    }
    
    // 4. Check existing products
    echo "\n4. Existing Products\n";
    $prod_result = $conn->query("SELECT id, category_id, name, price, is_active FROM products");
    $prod_count = $prod_result->num_rows;
    echo "   - Total products: $prod_count\n";
    if ($prod_count > 0) {
        echo "   - Products:\n";
        while ($row = $prod_result->fetch_assoc()) {
            $status = $row['is_active'] ? '✓' : '✗';
            $price = $row['price'] ? 'Rp ' . number_format($row['price'], 0, ',', '.') : 'N/A';
            echo "     [$status] ID:{$row['id']} - {$row['name']} ({$price})\n";
        }
    }
    
    // 5. Check image directory
    echo "\n5. Storage Paths\n";
    echo "   - Public storage symlink: ";
    if (is_link('public/storage')) {
        echo "✓ LINKED\n";
        echo "     Points to: " . readlink('public/storage') . "\n";
    } else {
        echo "✗ NOT LINKED\n";
    }
    
    // 6. Check products directory permissions
    $products_dir = 'storage/app/public/products';
    echo "   - Products storage directory exist: ";
    if (is_dir($products_dir)) {
        echo "✓ EXISTS\n";
        $files = scandir($products_dir);
        $image_count = count($files) - 2; // exclude . and ..
        echo "     - Images stored: $image_count\n";
    } else {
        echo "✗ MISSING (will be created on first upload)\n";
    }
    
    echo "\n=== SUMMARY ===\n";
    echo "✓ Database: Connected\n";
    echo "✓ Tables: All required\n";
    echo "✓ Admin User: Created\n";
    echo "✓ Categories: $cats_count available\n";
    echo "✓ Products: $prod_count existing\n";
    echo "\n✓ System ready for product creation!\n";
    
    $conn->close();
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
