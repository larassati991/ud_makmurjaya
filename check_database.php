<?php
// Simple PHP script to check database directly under Laragon's PHP environment

// 1. Get database credentials from .env
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

// 2. Connect to database
$host = $env_vars['DB_HOST'] ?? '127.0.0.1';
$user = $env_vars['DB_USERNAME'] ?? 'root';
$pass = $env_vars['DB_PASSWORD'] ?? '';
$db = $env_vars['DB_DATABASE'] ?? 'ud-makmurjaya';

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "✓ Database Connected!\n\n";
    
    // Check tables
    $tables_result = $conn->query("SHOW TABLES");
    echo "Available Tables (" . $tables_result->num_rows . "):\n";
    while ($row = $tables_result->fetch_row()) {
        echo "  - " . $row[0] . "\n";
    }
    
    // Check settings table
    echo "\n--- Settings Table Data ---\n";
    $settings_result = $conn->query("SELECT `key`, `value` FROM settings ORDER BY `key`");
    if ($settings_result) {
        echo "Settings found: " . $settings_result->num_rows . "\n";
        while ($row = $settings_result->fetch_assoc()) {
            echo "  " . $row['key'] . " = " . substr($row['value'], 0, 50) . (strlen($row['value']) > 50 ? '...' : '') . "\n";
        }
    } else {
        echo "Error: " . $conn->error . "\n";
    }
    
    // Count other tables
    echo "\n--- Data Count ---\n";
    $count_queries = [
        'categories' => "SELECT COUNT(*) as cnt FROM categories",
        'products' => "SELECT COUNT(*) as cnt FROM products",
        'users' => "SELECT COUNT(*) as cnt FROM users",
        'testimonials' => "SELECT COUNT(*) as cnt FROM testimonials"
    ];
    
    foreach ($count_queries as $table => $query) {
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        echo "  " . $table . ": " . $row['cnt'] . "\n";
    }
    
    $conn->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
