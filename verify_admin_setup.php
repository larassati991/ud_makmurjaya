#!/usr/bin/env php
<?php
/**
 * Admin Panel Setup Verification Script
 * Cek apakah semua setup sudah benar
 */

echo "\n";
echo "╔════════════════════════════════════════════════════════════╗\n";
echo "║  Admin Panel Setup Verification - UD Makmur Jaya Daging  ║\n";
echo "╚════════════════════════════════════════════════════════════╝\n";
echo "\n";

$checks = [];
$all_passed = true;

// Check 1: Check if migrations folder exists
$checks[] = [
    'name' => 'Migration files exist',
    'path' => 'database/migrations',
    'file' => '2026_02_24_000000_add_price_to_products_table.php'
];

// Check 2: Check if controllers exist
$checks[] = [
    'name' => 'Admin Controllers exist',
    'path' => 'app/Http/Controllers/Admin',
    'files' => [
        'AdminController.php',
        'ProductController.php',
        'CategoryController.php'
    ]
];

// Check 3: Check if views exist
$checks[] = [
    'name' => 'Admin Views exist',
    'path' => 'resources/views/admin',
    'files' => [
        'layout.blade.php',
        'dashboard.blade.php',
        'categories/index.blade.php',
        'categories/create.blade.php',
        'categories/edit.blade.php',
        'products/index.blade.php',
        'products/create.blade.php',
        'products/edit.blade.php'
    ]
];

// Check 4: Check if seeder exists
$checks[] = [
    'name' => 'Product Seeder exists',
    'path' => 'database/seeders',
    'file' => 'ProductSeeder.php'
];

// Check 5: Check storage folder
$checks[] = [
    'name' => 'Storage folders exist',
    'path' => 'storage/app/public',
    'type' => 'directory'
];

// Perform checks
echo "Checking files and directories...\n";
echo "─────────────────────────────────────────────────────────────\n\n";

foreach ($checks as $check) {
    $pass = false;
    $status = '✗';
    $message = '';

    if ($check['type'] ?? null === 'directory') {
        if (is_dir($check['path'])) {
            $pass = true;
            $status = '✓';
            $message = "Directory found";
        } else {
            $message = "Directory NOT found";
        }
    } elseif (isset($check['file'])) {
        $file_path = $check['path'] . '/' . $check['file'];
        if (file_exists($file_path)) {
            $pass = true;
            $status = '✓';
            $message = "File found";
        } else {
            $message = "File NOT found: " . basename($check['file']);
        }
    } elseif (isset($check['files'])) {
        $found = 0;
        $missing = [];
        foreach ($check['files'] as $file) {
            $file_path = $check['path'] . '/' . $file;
            if (file_exists($file_path)) {
                $found++;
            } else {
                $missing[] = $file;
            }
        }
        if ($found === count($check['files'])) {
            $pass = true;
            $status = '✓';
            $message = "All " . count($check['files']) . " files found";
        } else {
            $message = $found . "/" . count($check['files']) . " files found";
            if (!empty($missing)) {
                $message .= "\n  Missing: " . implode(", ", $missing);
            }
        }
    }

    $color = $pass ? "\033[92m" : "\033[91m";
    $reset = "\033[0m";

    echo $color . $status . $reset . " " . str_pad($check['name'], 35) . " " . $message . "\n";

    if (!$pass) {
        $all_passed = false;
    }
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n\n";

// Database checks
echo "Checking database setup...\n";
echo "─────────────────────────────────────────────────────────────\n\n";

try {
    // This is a simple check - in production you'd connect to DB
    echo "ℹ To verify database:\n";
    echo "  1. Run: php artisan migrate\n";
    echo "  2. Run: php artisan storage:link\n";
    echo "  3. Check: products table has 'price' column\n";
} catch (Exception $e) {
    echo "⚠ Database check skipped (manual verification needed)\n";
}

echo "\n";
echo "─────────────────────────────────────────────────────────────\n\n";

// Final result
if ($all_passed) {
    echo "\033[92m✓ All file structure checks PASSED!\033[0m\n";
    echo "\n";
    echo "Next steps:\n";
    echo "  1. php artisan migrate\n";
    echo "  2. php artisan storage:link\n";
    echo "  3. php artisan db:seed (optional, untuk sample data)\n";
    echo "  4. Open: http://localhost/ud-makmurjaya/admin/dashboard\n";
} else {
    echo "\033[91m✗ Some checks FAILED!\033[0m\n";
    echo "\nPlease verify files are in correct locations\n";
}

echo "\n";
echo "╚════════════════════════════════════════════════════════════╝\n";
echo "\n";

exit($all_passed ? 0 : 1);
?>
