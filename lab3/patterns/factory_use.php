<?php
spl_autoload_register();

use Factory\Router;

$obj = Router::parse('users');

echo "<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
</head>
<body>";

// Вывод списка пользователей
echo "<h2>Список пользователей</h2>";
echo "<pre>";
echo $obj->render();
echo "</pre>";

// Кнопка для просмотра диаграммы классов
echo "<a href='//www.plantuml.com/plantuml/png/T95FImCn4CNl-HHpwA5LjX-WM1K4RteGF8cKCJkLG3PP9XEqRFUx6xQRTl_Kwtjlvar-UGo2BB6ooc55eKPDy8nQF1-WKG3QOWZmvgCGTmB0RPDcnEWMQkH0oo1it3Si8jlL1YhpIsMVmw_aePOMc5n9l5mberMjcfUjNtn9DWmwtyEbCLTGXSQEfJfbVpoNOtLlECXhAXdB5eVgRgUzIrRKqbzsBd_orf8Murq-0Pdn00jzDkOx-eWHgW9iuUCpBnsyA40p7tpe9sCNs8ABrguch3KJ2gKLYUAcMtKAPB8RE3qo4yvS-w-xEnR5XFMwkqTT4w4eZlVJ-8M9-jU1c-irIZal1E9hyFk_jids164W1iEhP1ItKV-A0zWg-4D1Ht24irZwSLLNUBAHxy79KIXSIE0boKCkiJcRYBdpzCfhFn0OlURj5mPZ918aLAR7H2lfmqisvULBOw8tmaA1gQoTl2M2pB7RhZTxaInFn8m7BO58J-V7rDRyb7geVk_dZ5U0Ph-JYOhufp2HHxyPZTAR916ChuBeLphvXg2SbYWR2lHAaKxq1m00' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>";

echo "</body></html>";

