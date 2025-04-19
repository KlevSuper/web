<?php
require_once 'NewsDB.class.php';
$news = new NewsDB();
$errMsg = "";

// Обработка удаления новости
if (isset($_GET['del'])) {
    require_once 'delete_news.inc.php';
}

// Обработка добавления новости
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'save_news.inc.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8">
</head>
<body>
<p><a href="../index.php">Вернуться на главную</a></p>
  <h1>Последние новости</h1>
  <?php

  ?>
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    Заголовок новости:<br>
    <input type="text" name="title"><br>
    Выберите категорию:<br>
    <select name="category" required>
    <?php foreach ($news as $id => $name): ?>
        <option value="<?= $id ?>"><?= htmlspecialchars($name) ?></option>
    <?php endforeach; ?>
    </select>
    <br />
    Текст новости:<br>
    <textarea name="description" cols="50" rows="5"></textarea><br>
    Источник:<br>
    <input type="text" name="source"><br>
    <br>
    <input type="submit" value="Добавить">
  </form>
  <?php
require_once 'get_news.inc.php';
  ?>
       <a href='https://img.plantuml.biz/plantuml/png/pLHDRjD05DxFAPxKHLtQP1CfYmYgDYGB95e9kc0PJSOlmQhh2JFZj5LRgGdiGAgGUW2E42Y1G6bwXPaRyMoFNI8u0BPbZxxtVUzlvdb76wvCUXGpfW-ZPCGLFm8HSwtXZ05TRIuEXqgcIVXKnbB1gzUHmS8YLOYgGDSQZKOExYebZptMR3RP1MCcCZ62lROBExCtxfBUl-YUWVrfR-tCJTp4BkqNi7VPnou9cERh6xi4Uq-21V6MzfkT4xnmLun5YK4ru0BXsJuUwqxR9xi9ceynWu8yQWkqKL4ot0B13GwbEcq1QRSWH2rKD3AHJ1uuMgPAL9gD5lIbZBtV8PhSBQ5SANvwFk2nHcyCCKPJX8t2F48fflABPgwaMOCpQhk9n0LqshtztRrk6HIUm7f2r7hON_VKNjXlmS6BvzJsXe_NwmcPa20L9jYeCAff5VhFUf7Prp9nfvz9ovAg5dcWsaeyGH6yIJ5Bz5zfvAQ_2DxBIzHfR5OoepBv20zoOZ3cSVfdUSMYP2Qy7sFtH63U5HqKG5Y49_POHg7dKkgcIuTUxUbXyE28gYgFvkFpUjtlF_FGerfjkse0IwH1C784Sb3oCj_s4ntu6HtzXVtktjgvcm8jxsWuvkxIlIFZ3pSf1w1GBEYXQRgdQRbr7ofPsLdxbU0ho4VmCmtQrBq7Sc4_sck6IGXP8epjq99-2By1' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>

</body>
</html>