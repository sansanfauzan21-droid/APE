<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

try {
    $user = new User();
    $user->name = 'Admin User';
    $user->email = 'admin123@gmail.com';
    $user->password = Hash::make('rahasia123');
    $user->save();

    $user->assignRole('super-admin');

    echo "Super Admin user created successfully!\n";
    echo "Email: admin123@gmail.com\n";
    echo "Password: rahasia123\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
