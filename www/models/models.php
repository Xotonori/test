<?php

function article_Check_Isset($title_article, $article) { // Проверка есть ли что-то в post
    if (empty($title_article) || empty($article)) {
        return false;
    } else {
        return true;
    }
}

function article_Insert_Bd($title_article, $article) { // После проверки отправить данные на сервер
    if (connect_Bd()) {
        $res = mysql_query('INSERT INTO articles (title_article, article) VALUES '.'(\''.$title_article.'\',\''.$article.'\')');
        if ($res) {
            return $res;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function article_Array_Get_Bd() { // Получить массив новостей из БД
        $allArticles = [];
        $resource = mysql_query('SELECT * FROM articles ORDER BY (date_time) DESC');
        while ($res = mysql_fetch_array($resource)) {
            $allArticles[] = $res;
        };
        return $allArticles;
}

function article_Get_Bd($id) {
    $resource = mysql_query('SELECT * FROM articles WHERE id='.$id); // Получаем массив статьи по id из БД
    $res = mysql_fetch_array($resource);
    return $res;
}

