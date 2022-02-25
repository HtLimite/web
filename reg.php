<?php
include('db.php');
session_start();
$name = $_POST['user_num'];
$pwd = md5($_POST['password']);
$insql = "INSERT INTO users(user_num,password) VALUES('{$name}','{$pwd}')";
$sql = "SELECT COUNT(*) FROM users WHERE user_num='$name'";
$count = $pdo->query($sql);
$num = $count->fetchColumn();
if($num > 0){
    echo "<script>alert('账号已被注册');location='reg.html';</script>";
    exit;
}else if(strlen($_POST['password']) < 6){
        echo "<script>alert('密码至少6位数！重新填写');location='reg.html';</script>";
    
}else{
    $insth = $pdo->prepare($insql);
    $insth->execute();
    echo "<script>alert('您已成功注册！立即登录');location='loginh.php'</script>";

}

?>