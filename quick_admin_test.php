<?php

require __DIR__ . '/vendor/autoload.php';

$tests_passed = 0;
$tests_failed = 0;

echo "╔════════════════════════════════════════════════════════════════╗\n";
echo "║  ADMIN PANEL - QUICK FUNCTIONALITY TEST                        ║\n";
echo "╚════════════════════════════════════════════════════════════════╝\n\n";

// Test 1: Login page (no auth required)
echo "TEST 1: Login page should load (no auth required)\n";
$cmd = 'curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/admin/login';
$response = shell_exec($cmd);
if ($response == '200') {
    echo "✅ PASS - Login page loads with status 200\n";
    $tests_passed++;
} else {
    echo "❌ FAIL - Login page status: $response\n";
    $tests_failed++;
}

// Test 2: Dashboard without auth should redirect
echo "\nTEST 2: Dashboard without auth should redirect to login (302/301)\n";
$cmd = 'curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/admin/dashboard';
$response = shell_exec($cmd);
if (in_array($response, ['301', '302', '303', '307'])) {
    echo "✅ PASS - Dashboard redirects with status $response\n";
    $tests_passed++;
} else {
    echo "⚠️  Dashboard status: $response (expected redirect)\n";
    $tests_failed++;
}

// Test 3: Categories list without auth
echo "\nTEST 3: Categories page without auth should redirect\n";
$cmd = 'curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/admin/categories';
$response = shell_exec($cmd);
if (in_array($response, ['301', '302', '303', '307'])) {
    echo "✅ PASS - Categories page redirects with status $response\n";
    $tests_passed++;
} else {
    echo "⚠️  Categories page status: $response\n";
    $tests_failed++;
}

// Test 4: Products list without auth
echo "\nTEST 4: Products page without auth should redirect\n";
$cmd = 'curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/admin/products';
$response = shell_exec($cmd);
if (in_array($response, ['301', '302', '303', '307'])) {
    echo "✅ PASS - Products page redirects with status $response\n";
    $tests_passed++;
} else {
    echo "⚠️  Products page status: $response\n";
    $tests_failed++;
}

echo "\n╔════════════════════════════════════════════════════════════════╗\n";
echo "║  QUICK TEST RESULTS\n";
echo "╚════════════════════════════════════════════════════════════════╝\n";
echo "✅ PASSED: $tests_passed\n";
echo "❌ FAILED: $tests_failed\n";
echo "📊 TOTAL:  " . ($tests_passed + $tests_failed) . "\n";

if ($tests_failed == 0) {
    echo "\n✅✅✅ ALL TESTS PASSED! Admin panel is working! ✅✅✅\n";
} else {
    echo "\n⚠️ Some tests failed, check details above\n";
}

?>
