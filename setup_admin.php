<?php

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
$user = getenv('DB_USERNAME') ? getenv('DB_USERNAME') : 'root';
$pass = getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '';
$db = $env_vars['DB_DATABASE'] ?? 'ud-makmurjaya';

try {
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Hash password using PHP password_hash
    $hashed_password = password_hash('admin123', PASSWORD_BCRYPT);
    
    // Insert admin user
    $email = 'admin@udmakmurjaya.com';
    $name = 'Admin UD Makmur Jaya';
    
    $sql = "INSERT INTO users (name, email, password, email_verified_at, updated_at, created_at)
            VALUES (?, ?, ?, NULL, NOW(), NOW())";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "✗ Prepare failed: " . $conn->error . "\n";
        exit;
    }
    
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    
    if ($stmt->execute()) {
        echo "✓ Admin user created successfully!\n";
        echo "Email: admin@udmakmurjaya.com\n";
        echo "Password: admin123\n\n";
        echo "You can now login to admin panel!\n";
    } else {
        if (strpos($stmt->error, 'Duplicate entry') !== false) {
            echo "✓ Admin user already exists\n";
        } else {
            echo "✗ Error: " . $stmt->error . "\n";
        }
    }
    
    $stmt->close();
    $conn->close();
    
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}
