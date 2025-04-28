<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
        <link rel="stylesheet" href="/project/webroot/css/styles.css">
</head>
<body>
    <header>
        Хедер сайта | <?= $title ?>
    </header>
    <div class="container">
        <aside class="sidebar left">
            Левый сайдбар
        </aside>
        <main>
            <?= $content ?>
        </main>
        <aside class="sidebar right">
                    <img src='/project/webroot/css/image.png'>
            
        </aside>
    </div>
    <footer>
        Футер сайта © <?= date('Y') ?>
    </footer>
</body>
</html>