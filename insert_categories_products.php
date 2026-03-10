<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

$categories = [
    [
        'name' => 'Daging Bebek',
        'slug' => 'daging-bebek',
        'description' => 'Daging bebek dengan berbagai macam jenis potongan. Dapat menyesuaikan kebutuhan bisnis Anda',
        'order' => 1,
        'is_active' => 1
    ],
    [
        'name' => 'Daging Sapi',
        'slug' => 'daging-sapi',
        'description' => 'Tersedia slice, saikoro, shabu, yakiniku, dan berbagai olahan siap masak.',
        'order' => 2,
        'is_active' => 1
    ],
    [
        'name' => 'Daging Kambing',
        'slug' => 'daging-kambing',
        'description' => 'Daging kambing premium dengan potongan sesuai kebutuhan You.',
        'order' => 3,
        'is_active' => 1
    ],
];

$sql = 'INSERT INTO categories (`name`, `slug`, `description`, `order`, `is_active`, `created_at`, `updated_at`) 
        VALUES (?, ?, ?, ?, ?, NOW(), NOW())';
$stmt = $pdo->prepare($sql);

foreach ($categories as $category) {
    $stmt->execute([
        $category['name'],
        $category['slug'],
        $category['description'],
        $category['order'],
        $category['is_active']
    ]);
}

echo "✓ " . count($categories) . " categories inserted successfully!\n";

// Add some sample products
$products = [
    ['category_id' => 1, 'name' => 'Daging Bebek Bulk (Per KG)', 'slug' => 'bebek-bulk', 'description' => 'Daging bebek segar berkualitas premium', 'order' => 1, 'is_active' => 1],
    ['category_id' => 2, 'name' => 'Daging Sapi Slice (Per KG)', 'slug' => 'sapi-slice', 'description' => 'Daging sapi potong slice untuk shabu', 'order' => 1, 'is_active' => 1],
    ['category_id' => 3, 'name' => 'Daging Kambing Segar (Per KG)', 'slug' => 'kambing-segar', 'description' => 'Daging kambing premium segar', 'order' => 1, 'is_active' => 1],
];

$sql = 'INSERT INTO products (`category_id`, `name`, `slug`, `description`, `order`, `is_active`, `created_at`, `updated_at`) 
        VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())';
$stmt = $pdo->prepare($sql);

foreach ($products as $product) {
    $stmt->execute([
        $product['category_id'],
        $product['name'],
        $product['slug'],
        $product['description'],
        $product['order'],
        $product['is_active']
    ]);
}

echo "✓ " . count($products) . " sample products inserted successfully!\n";
