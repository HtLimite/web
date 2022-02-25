<?php
include('db.php');
if(!isset($_GET['page'])){
    $_GET['page']= 1;
}
$page = intval($_GET['page']);
$num = 3;
$sql = "SELECT * FROM wordli";
$sth = $pdo->prepare($sql);
$sth->execute();
$row = $sth->rowCount();
$pagenum = ceil($row/$num);
if($row!=0){
    if($page > $pagenum || $page == 0){
        echo "<script>alert('没有内容了');history.go(-1);</script>";
        exit;
    }
}
$offset = ($page-1)*$num;

$sqlpage = "SELECT * FROM wordli ORDER BY dateline DESC LIMIT $offset,$num ";
// $sth = $pdo->prepare($sqlpage);
// $sth->execute();
// $count = $sth->fetchAll();







?>