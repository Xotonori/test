<?php
//require  __DIR__.'../functions/func_bd.php';

function articleCheck ($title_article, $article) { // Проверка есть ли что-то в post статьи
    if (isset($title_article) || isset($article)) {
        return true;
    } else {
        return false;
    }
}

function articleInsertBd ($title_article, $article) { // После проверки отправить данные на сервер
    if (articleCheck($title_article, $article)) {
        if (connectBd()) {
            //mysql_query('INSERT INTO articles (title_article, article) VALUES '.'(\''.$title_article.'\',\''.$article.'\')');
            echo 'INSERT INTO articles (title_article, article) VALUES '.'(\''.$title_article.'\',\''.$article.'\')';
        } else {
            return false;
        }
    }
}

function articleGetBd () {
    if (connectBd()) {
        mysql_query('SELECT *');
    } else {
        return false;
    }
}

