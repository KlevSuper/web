<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="image.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проектирование архитектуры корпоративных информационных систем</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .top-bar {
            height: 5px;
            background: linear-gradient(90deg, #4b6cb7, #182848);
        }
        
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .custom-list {
            list-style-type: none;
            padding: 0;
        }
        
        .custom-list li {
            margin-bottom: 10px;
            margin-top: 10px;
        }
        
        .custom-list a {
            display: block;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .custom-list a:hover {
            background-color: #2980b9;
        }
        
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown-content a {
            background-color: #f1f1f1;
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            display: block;
            border-radius: 0;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .coffee-bean {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            opacity: 0.7;
            transition: transform 0.3s;
        }
        
        .coffee-bean:hover {
            transform: rotate(15deg);
        }
        
        .corner-icon {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 40px;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }
        
        .corner-icon:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <div class="top-bar"></div>

    <main>
        <h1>Лабораторные работы</h1>
        <ul class="custom-list">
            <li><a href="lab1/MyProject/Classes/users.php" title="Классы и интерфейсы">Лаба 1 - Классы и интерфейсы</a></li>
            <!--<li class="dropdown" id="lab2-dropdown">-->
                <a href="lab2.html"title="Паттерны проектирования">Лаба 2 - Паттерны проектирования<br></a>
                <!--<div class="dropdown-content">-->
                <!--</div>-->
            </li>
            <li class="dropdown">
                <a href="lab3.html" title="Паттерн Модель-Представление-Контроллер">Лаба 3 - MVC</a>
                <!--<div class="dropdown-content">-->
                    <!--<a href="lab3/patterns/settings_use.php">I</a>-->
                    <!--<a href="lab3/patterns/factory_use.php">II</a>-->
                    <!--<a href="lab3/patterns/mvc_use.php">III</a>-->
                <!--</div>-->
            </li>
            <li><a href="lab4.html">Лаба 4</a></li>
            <li><a href="lab5.html">Лаба 5</a></li>
            <li><a href="lab6.html">Лаба 6</a></li>
        </ul>
    </main>

    <img src="php.png" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 80px;
    height: auto;
    opacity: 0.8;
    transition: transform 0.3s;
    " alt="PHP логотип" >
    
    <a href="https://img.plantuml.biz/plantuml/png/dLBDJW8n4ButsNUOn0j4u4B2WN0GFN4cnYEftR8qB2rfk-409E9LZpu8qHXHYBv2zusSPNzWqNXmczrclfdvvfkPlJ2MQXjDGezun8o5d59D9y12QWpCFGBuN58s3hIAf7-bGgNXPYGiprnA-rody5cpsKpHhjPgbe6jLiiZouJT2XjoS4zkuzRk9Rx3xmxF6jo7sxfrl8fNxjCz0ruRDExTgzl53-2-4Dt6Z-ujyM9SujZY-vwGqbjZDMKsKzpDp6l3TIx_7EPvr1BCICrwSgWgrKoLa9Rh8MKS-j6KwoInLq05Gy1jAIkjLguYwOIteM-ra46EXIeGiWpMOOgvCnpSQJ2kmWe632Tjsu32SiTWm9J43Y9cAqcLMifRAvYg1SLHUtckpxFKilYYtKC7MeK_ElY_gDgUxmzffqCjBQ-pgDVt0_R8mIuqU-INRNKMZSPnY4SkkFJnt_u6" target="_blank">
        <img src="paha.png" alt="Иконка" class="corner-icon" title="beep-beep">
    </a>

</body>
</html>