<?php
    session_start();
    include('db.php');
    $name = $_POST['user_num'];
    $pwd = md5($_POST['password']);
    $sql_select = "SELECT * FROM users WHERE user_num ='$name' " ;
    $sth = $pdo->prepare($sql_select);
    $sth->execute();
    $rows = $sth->fetchAll();

    if(empty($rows)){
        echo "<script>alert('账号不存在！请重新输入');location='loginh.php'</script>";
        exit;
    }
    if(($rows[0]['password']) === $pwd){
        $_SESSION['user'] = $name;
        $_SESSION['id'] = $rows[0]['id'];
        // setcookie('user',$name);

        echo "<script>alert('登录成功！欢迎');location='admin.php'</script>";
        exit;
    }else{
        echo "<script>alert('账号或密码不正确！请重新输入');location='loginh.php'</script>";
        exit;
    }




?>