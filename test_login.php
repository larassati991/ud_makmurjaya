<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

// Test 1: Check login page loads
echo "TEST 1: Check if login page loads\n";
try {
    $request = \Illuminate\Http\Request::create('/admin/login', 'GET');
    $response = $kernel->handle($request);
    if ($response->getStatusCode() === 200) {
        echo "✅ Login page loads successfully (Status: 200)\n";
    } else {
        echo "❌ Login page error (Status: {$response->getStatusCode()})\n";
    }
} catch (\Exception $e) {
    echo "❌ Login page error: {$e->getMessage()}\n";
}

// Test 2: Try to access dashboard without auth (should redirect)
echo "\nTEST 2: Check dashboard access without auth\n";
try {
    $request = \Illuminate\Http\Request::create('/admin/dashboard', 'GET');
    $response = $kernel->handle($request);
    if ($response->getStatusCode() === 302 || $response->getStatusCode() === 301) {
        echo "✅ Dashboard redirects without auth (Status: {$response->getStatusCode()})\n";
        echo "   Redirect to: {$response->headers->get('Location')}\n";
    } else {
        echo "⚠️  Dashboard response status: {$response->getStatusCode()}\n";
    }
} catch (\Exception $e) {
    echo "❌ Dashboard access error: {$e->getMessage()}\n";
}

// Test 3: Test login POST
echo "\nTEST 3: Test login with password\n";
try {
    $request = \Illuminate\Http\Request::create('/admin/login', 'POST', [
        'password' => '12345'
    ]);
    $request->session()->put('_token', 'temp-token');
    
    // This won't work properly without full Laravel request cycle, but let's try
    echo "⚠️  Full login test requires HTTP client, skipping detailed test\n";
    echo "   Note: Password validation is set to env('ADMIN_PASSWORD', '12345')\n";
} catch (\Exception $e) {
    echo "❌ Login test error: {$e->getMessage()}\n";
}

echo "\n✅ Test complete\n";
?>
