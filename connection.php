<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "db_wbns";

/* Таблица MySQL, в которой хранятся данные */
$userstable = "table_info";

/* создать соединение */
$db = mysqli_connect($hostname,$username,$password,$dbName) OR DIE("Немогу создать соединение ");
mysqli_set_charset($db, "utf8") or die('Не установлена кодировка');