<?php

declare(strict_types=1);

// Autoloader function
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Create regular users
$user1 = new User("KUKI HD", "KUKI", "123456");
$user2 = new User("Alexander Akulov", "Alexander", "123456");
$user3 = new User("Alex HD", "Alex", "123456");

// Create a super user
$superUser = new SuperUser("Admin User", "admin", "adminpass", "Administrator");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .user-card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
        .super-user-card {
            background-color: #e8f4ff;
            border: 1px solid #b8daff;
        }
        .stats {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
        .user-info {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management System</h1>
        <h2>Regular Users</h2>
        <?php
        $regularUsers = [$user1, $user2, $user3];
        foreach ($regularUsers as $user) {
            echo '<div class="user-card">';
            echo '<div class="user-info"><strong>Name:</strong> ' . htmlspecialchars($user->name) . '</div>';
            echo '<div class="user-info"><strong>Login:</strong> ' . htmlspecialchars($user->login) . '</div>';
            echo '</div>';
        }
        ?>

        <h2>Super User</h2>
        <div class="user-card super-user-card">
            <?php
            $superUserInfo = $superUser->getInfo();
            foreach ($superUserInfo as $key => $value) {
                echo '<div class="user-info"><strong>' . ucfirst($key) . ':</strong> ' . htmlspecialchars($value) . '</div>';
            }
            ?>
        </div>

        <div class="stats">
            <h2>Statistics</h2>
            <p>Всего обычных пользователей: <?php echo User::getUserCount(); ?></p>
            <p>Всего супер-пользователей: <?php echo SuperUser::getSuperUserCount(); ?></p>
        </div>
    </div>
</body>
</html>
