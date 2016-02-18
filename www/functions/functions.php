<?php

function article_Check_Isset($title_article, $article) { // Проверка есть ли что-то в post
    if (empty($title_article) || empty($article)) {
        return false;
    } else {
        return true;
    }
}