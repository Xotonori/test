<?php
session_start();
require  __DIR__.'/models/models.php';
require  __DIR__.'/functions/func_bd.php';


if (connect_Bd()) {
    if (isset($_GET['id'])) {
        $article = article_Get_Bd($_GET['id']);
        if (!empty($article)) {
            require  __DIR__.'/view/page_new.php';
        }
    }
    close_Bd();
}
