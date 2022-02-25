<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM wordli WHERE id='$id'";
    $sth = $pdo->prepare($sql);
    $a = $sth->execute();
    if($a){
        echo "<script>alert('文章已删除！返回后台管理系统');location='admin.php';</script>";
        exit;
    }else{
        echo "<script>alert('文章删除失败！');history.go(-1);</script>" ;
        exit;
    }


?>