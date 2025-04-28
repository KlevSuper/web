<!DOCTYPE html>
<html>
<head>
    <title>MVC-фреймворк</title>
     <style>
    body {
        font-family: Arial, sans-serif;
        max-width: 1000px;
        margin: 0 auto;
        padding: 50px;
        line-height: 1.5;
    }
    h1, h2, h3 {
        text-align: left;
        margin-left: 0;
        padding-left: 0;
    }
    h1 {
        color: #345;
        margin-bottom: 50px;
    }
    h2 {
        margin-top: 50px;
        color: #444;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }
    .frame-container {
        margin: 15px 0;
        border: 1px solid #eee;
        padding: 10px;
        background: #f9f9f9;
    }
    iframe {
        width: 500px;
        border: 1px solid #ddd;
        height: 500px;
        background: white;
    }
</style> 
</head>
<body>
    <h1>Демонстрация MVC-фреймворка</h1>

    <h2>1. TestController</h2>
    <div class="frame-container">
        <h3>Действие act1</h3>
        <iframe src="http://y91550gt.beget.tech/test/act1/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Действие act2</h3>
        <iframe src="http://y91550gt.beget.tech/test/act2/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Действие act3</h3>
        <iframe src="http://y91550gt.beget.tech/test/act3/"></iframe>
    </div>

    <h2>2. NumController (сумма чисел)</h2>
    <div class="frame-container">
        <h3>Сумма 5, 10, 15</h3>
        <iframe src="http://y91550gt.beget.tech/nums/5/10/15/"></iframe>
    </div>

    <h2>3. UserController</h2>
    <div class="frame-container">
        <h3>Пользователь с ID 2</h3>
        <iframe src="http://y91550gt.beget.tech/user/2/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Имя пользователя с ID 3</h3>
        <iframe src="http://y91550gt.beget.tech/user/3/name/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все пользователи</h3>
        <iframe src="http://y91550gt.beget.tech/user/all/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Первые 3 пользователя</h3>
        <iframe src="http://y91550gt.beget.tech/user/first/3/"></iframe>
    </div>

    <h2>4. ProductController</h2>
    <div class="frame-container">
        <h3>Продукт с ID 3</h3>
        <iframe src="http://y91550gt.beget.tech/product/3/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все продукты</h3>
        <iframe src="http://y91550gt.beget.tech/products/all/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все страницы</h3>
        <iframe src="http://y91550gt.beget.tech/page/"></iframe>
    </div>
    <div class="frame-container">
        <h3>Все продукты</h3>
        <iframe src="http://y91550gt.beget.tech/products/"></iframe>
    </div>
</body>
</html>