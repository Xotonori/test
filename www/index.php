<?php
session_start();
require  __DIR__.'/models/models.php';
require  __DIR__.'/functions/func_bd.php';
require  __DIR__.'/functions/functions.php';

if (isset($_SESSION['error_check'])) {
    echo $_SESSION['error_check'];
    unset($_SESSION['error_check']);
}

if (connect_Bd()) {
    if (!empty(article_Array_Get_Bd())) {
        require __DIR__ . '/view/article_news.php';
    } else {
        echo '<span>Статей нет!</span><br><br>';
    }
    close_Bd();
}
require __DIR__ . '/view/article_send_form.php';








