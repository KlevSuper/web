<?php
if (!empty($_POST)) {

    error_log('POST data received: ' . print_r($_POST, true));
    
    if (empty($_POST['title']) || empty($_POST['category']) || 
        empty($_POST['description']) || empty($_POST['source'])) {
        $errMsg = "Заполните все поля формы!";
        error_log('Form validation failed: empty fields detected');
    } else {

        $title = strip_tags(trim($_POST['title']));
        $category = (int)$_POST['category'];
        $description = strip_tags(trim($_POST['description']));
        $source = strip_tags(trim($_POST['source']));

        error_log('Attempting to save news with data: ' . 
                 "title=$title, category=$category, source=$source");

        if (!$news->saveNews($title, $category, $description, $source)) {
            $errMsg = "Произошла ошибка при добавлении новости";
            error_log('Failed to save news');
        } else {
            error_log('News saved successfully');
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
}
?>