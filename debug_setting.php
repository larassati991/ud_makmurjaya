<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$pdo = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

// Check if company_tagline exists
echo "Checking 'company_tagline' in database:\n";
$result = $pdo->query("SELECT * FROM settings WHERE `key` = 'company_tagline'");
$row = $result->fetch();

if ($row) {
    echo "✓ Found!\n";
    echo "  ID: " . $row['id'] . "\n";
    echo "  Key: " . $row['key'] . "\n";
    echo "  Value: " . $row['value'] . "\n";
    echo "  Type: " . $row['type'] . "\n";
} else {
    echo "✗ NOT FOUND!\n";
}

echo "\n\nAll settings keys in database:\n";
$result = $pdo->query("SELECT `key` FROM settings ORDER BY id");
while ($row = $result->fetch()) {
    echo "  - " . $row['key'] . "\n";
}

echo "\n\nTesting Laravel Setting model:\n";
require 'bootstrap/app.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

try {
    $setting = \App\Models\Setting::where('key', 'company_tagline')->first();
    if ($setting) {
        echo "✓ Setting found via Eloquent:\n";
        echo "  Value: " . $setting->value . "\n";
    } else {
        echo "✗ Setting NOT found via Eloquent\n";
    }
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
?>
