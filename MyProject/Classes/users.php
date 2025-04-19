<?php
namespace MyProject\Classes;

// Автозагрузчик классов
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('MyProject\\Classes\\', '', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Файл класса не найден: $file");
    }
});

// Инициализация счётчиков
User::$count = 0;
SuperUser::$count = 0;

// Создание пользователей
$User1 = new User("Иван Иванов", "ivan123", "password123");
$User2 = new User("Петр Петров", "petr2003", "pass123");
$User3 = new User("Илья Бычков", "ilyha", "zxcqwe");

// Вывод информации
echo "<h2>Информация о пользователе:</h2>";
$User1->showInfo(); 
$User2->showInfo(); 
$User3->showInfo();

echo "<hr>";
$SuperUser = new SuperUser("SuperUser", "sup", "Ussrersdfs12345", "Administrator");
$SuperUser->showInfo(); 
echo "<hr>";

// Статистика
echo "<h2>Подсчёт пользователей:</h2>";
echo "Обычные пользователи: " . User::$count . "<br>";
echo "Супер-пользователи: " . SuperUser::$count . "<br>";

// Массив информации
echo "<h2>Информация о суперпользователе:</h2>";
print_r($SuperUser->getInfo());