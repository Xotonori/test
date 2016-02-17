<?php

function connectBd() {
    mysql_connect('localhost', 'root' , '');
    return mysql_select_db('test');
}

function closeBd() {
    mysql_close();
}

