<?php
if (isset($_GET['del'])) {
    $id = (int)$_GET['del'];
    
    if ($id > 0) {
        if (!$news->deleteNews($id)) {
            $errMsg = "Произошла ошибка при удалении новости";
        } else {
            header("Location: news.php");
            exit;
        }
    }
}
?>