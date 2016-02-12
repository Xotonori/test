<?php

function connectBd() {
    mysql_connect('localhost', 'root' , '');
    return mysql_select_db('test');
}

function closeBd() {
    mysql_close();
}

function Errors() {
    if (!connectBd()) {
        $_SESSION['error_connect_bd'] = 'Ошибка подключения базы данных!';
    }
    if (!connectBd()) {
        $_SESSION['error_connect_bd'] = 'Ошибка подключения базы данных!';
    }
}