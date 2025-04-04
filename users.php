<?php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User("Иван", "ivan", "pass123");
$user2 = new User("Петр", "peter", "qwerty");
$user3 = new User("Анна", "anna", "password");

$superUser = new SuperUser("Админ", "admin", "root", "administrator");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
$superUser->showInfo();

print_r($superUser->getInfo());

echo "Всего обычных пользователей: " . User::getCount() . "<br>";
echo "Всего супер-пользователей: " . SuperUser::getCount() . "<br>";
