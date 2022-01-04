<?php
// 连接到数据库
$dsn = 'mysql:dbname=myfristdb;host=localhost';
$pdo = new PDO($dsn,'root','');
$pdo->query("SET NAMES utf8");

?>