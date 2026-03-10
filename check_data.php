<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

// Check settings count
$result = $pdo->query('SELECT COUNT(*) as count FROM settings');
$row = $result->fetch();
echo "✓ Settings count: " . $row['count'] . "\n\n";

// Check categories count
$result = $pdo->query('SELECT COUNT(*) as count FROM categories');
$row = $result->fetch();
echo "✓ Categories count: " . $row['count'] . "\n\n";

// Check products count
$result = $pdo->query('SELECT COUNT(*) as count FROM products');
$row = $result->fetch();
echo "✓ Products count: " . $row['count'] . "\n\n";

// Sample settings
echo "Sample settings:\n";
$result = $pdo->query('SELECT `key`, `value` FROM settings LIMIT 3');
while($row = $result->fetch()) {
    echo "  - {$row['key']}: {$row['value']}\n";
}

echo "\nSample categories:\n";
$result = $pdo->query('SELECT id, name FROM categories LIMIT 3');
while($row = $result->fetch()) {
    echo "  - {$row['name']}\n";
}
