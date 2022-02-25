<?php
    if(trim($_POST['title'])==''||trim($_POST['author'])==''||trim($_POST['descript'])==''||trim($_POST['content'])==''){
        echo "<script>alert('不能全部为空格！');history.go(-1);</script>";
         exit;
     }
    include('db.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $descript = $_POST['descript'];
    $content = $_POST['content'];
    $dateline = time();
    $sql = "UPDATE wordli SET title='$title',author='$author',descript='$descript',content='$content',dateline=$dateline WHERE id='$id'";
    $sth = $pdo->prepare($sql);
    $a = $sth->execute();
    if($a){
        echo "<script>alert('文章修改成功！返回后台管理系统');location='admin.php';</script>";
        exit;
    }else{
        echo "<script>alert('文章修改失败！请重新编写');history.go(-1);</script>" ;
        exit;
    }



?>