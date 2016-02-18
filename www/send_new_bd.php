<?php
session_start();
require  __DIR__.'/models/models.php';
require  __DIR__.'/functions/func_bd.php';

if (connect_Bd()){
    if (article_Check_Isset($_POST['title_article'], $_POST['article'])) {
        article_Insert_Bd($_POST['title_article'], $_POST['article']);
    } else {
        $_SESSION['error_check'] = 'Отправлен пустой Заголовок или Текст!';
    }
    close_Bd();
    header('Location: index.php');
}
