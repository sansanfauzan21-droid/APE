<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

try {
    $user = new User();
    $user->name = 'Admin Contact';
    $user->email = 'admin@contact.com';
    $user->password = Hash::make('password123');
    $user->save();

    $user->assignRole('admin');

    echo "Admin user created successfully!\n";
    echo "Email: admin@contact.com\n";
    echo "Password: password123\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
