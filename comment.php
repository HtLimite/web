<?php
    session_start();
    if(trim($_POST['comment'])==''){
        echo "<script>alert('不能全部为空格！');history.go(-1);</script>";
        exit;
    }
    $id = $_SESSION['id'];
    $message = $_POST['message'];
    $comment = $_POST['comment'];
    $addtime = time();
    include('db.php');
    $sql = "INSERT INTO comments(user,comment,addtime,message) VALUES('{$id}','{$comment}','{$addtime}','{$message}')";
    $sth = $pdo->prepare($sql);
    $result = $sth->execute();
    var_dump($result,$sql,$comment,$id,$addtime,$_POST['message']);
    header('location:admin.php');





?>