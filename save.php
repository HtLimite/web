<?php
$a = $_POST['frist'];
$b = $_POST['second'];
$intime = time();


if(trim($a) == '' || trim($b) == ''){
    exit;
}
include('db.php');
$sql = "insert into liuyan(talkworld,people,intime) values('{$a}','{$b}','{$intime}')";
$sth = $pdo->prepare($sql);
$c = $sth->execute();

header("location: home.php");
?>