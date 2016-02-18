<?php

function connect_Bd() {
    mysql_connect('localhost', 'root' , ''); // Подключаем БД
    return mysql_select_db('test');
}

function close_Bd() { // Закрываем БД
    mysql_close();
}

