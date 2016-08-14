<?php
$db_hostname = "127.0.0.1";
$db_database = "file_srv";
$db_username = "user";
$db_password = "password";

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database, $db_server);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8-general-ci'");

setlocale(LC_ALL, "ru_RU.UTF-8");
?>