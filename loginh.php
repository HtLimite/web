<?php
    session_start();
    if(!empty($_SESSION['user'])){
        echo "<script>location='admin.php';</script>";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiki-login</title>
    <style>
        body{
            text-align: center;
            color: white;
            height: 100%;
            margin: 17% 0;
            background: url(instagram/bag17.jpg);
            background-attachment: fixed;
            background-size: 100%;
        }
        h3{
            margin: 70px 0;
            margin-bottom: 33px;
            font-size: 23px;
        }
        input{
            width: 300px;
            height: 30px;
        }
        a{
            text-decoration: none;
            color: #004962;
            border: solid;
            padding: 6px 17px;
            font-size: 13px;
            background-color:#a6c4d5ba;
            border-radius: 3px;
        }
        a:hover{
            background-color: #1497d2db;
        }
        .reg{
            margin-top: 30px;
        }
        .but{
            height: 30px;
            width: 97px;
            background-color: #c1d3dbb0;
            border-style: none;
            color: #2a4368;
        }
        .but:hover{
            background-color: #1497d2db;
        }
        .buttom{
            margin-top: 28px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h3>登录账号</h3>
        <p>账号：<input type="text" name="user_num" placeholder="请输入账号" required="" lay-verify="required" ></p>
        <p>密码：<input type="password" name="password" placeholder="请输入密码" required="" lay-verify="required" ></p>
        <!-- <p>验证码：<input type="text" placeholder="请输入验证码" required="" lay-verify="required" ></p> -->
        <div class="buttom">
            <div><button class="but" type="submit">立即登录</button></div>
            <div class="reg"><a href="reg.html">没有账号，立即注册</a></div>
        </div> 
    </form>
</body>
</html>