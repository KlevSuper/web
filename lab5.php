<?php
namespace MyProject;

// Явное подключение файла (временно для отладки)
require_once __DIR__ . '/MyProject/Classes/NumbersSquared.php';

use MyProject\Classes\NumbersSquared;

// Автозагрузчик (дополнительная проверка)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    echo "Пытаемся загрузить: $class\n";
    echo "Ищем файл: $file\n";
    
    if (file_exists($file)) {
        require_once $file;
        echo "Файл успешно загружен\n";
    } else {
        die("Файл класса не найден: $file");
    }
});

// Проверка существования класса перед использованием
if (!class_exists('MyProject\Classes\NumbersSquared')) {
    die("Класс NumbersSquared не найден!");
}

// Создание и использование итератора
try {
    $obj = new NumbersSquared(3, 7);
    foreach ($obj as $num => $square) {
        echo "Квадрат числа $num = $square<br>";
    }
} catch (Error $e) {
    die("Ошибка: " . $e->getMessage());
}
echo "<a href='lab5/diagrams/NumbersSquared.png' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>";
echo "<br><a href='index.php'>Вернуться на главную</a>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Standard PHP Library</title>
	<meta charset="utf-8">
</head>

</html>


