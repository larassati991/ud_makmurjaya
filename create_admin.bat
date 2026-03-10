php artisan tinker << 'EOF'
$user = App\Models\User::create([
    'name' => 'Admin UD Makmur Jaya',
    'email' => 'admin@udmakmurjaya.com',
    'password' => bcrypt('admin123'),
]);
echo "✓ Admin user created!\n";
echo "Email: admin@udmakmurjaya.com\n";
echo "Password: admin123\n";
exit;
EOF
