<?php
$items = $news->getNews();

if ($items === false) {
    echo "<p>Произошла ошибка при выводе новостной ленты</p>";
} elseif (empty($items)) {
    echo "<p>Новостей пока нет</p>";
} else {
    echo "<h2>Всего новостей: " . count($items) . "</h2>";
    foreach ($items as $item) {
        echo "<div style='border: 1px solid #ccc; margin: 10px; padding: 10px;'>";
        echo "<h3>" . htmlspecialchars($item['title']) . "</h3>";
        echo "<p><strong>Категория:</strong> " . htmlspecialchars($item['category']) . "</p>";
        echo "<p>" . htmlspecialchars($item['description']) . "</p>";
        echo "<p><em>Источник: " . htmlspecialchars($item['source']) . "</em></p>";
        echo "<p>Дата: " . date('d-m-Y H:i:s', $item['datetime']) . "</p>";
        echo "<p><a href='" . $_SERVER['PHP_SELF'] . "?del=" . $item['id'] . 
             "' onclick='return confirm(\"Удалить новость?\")'>Удалить новость</a></p>";
        echo "</div>";
    }
}
?>