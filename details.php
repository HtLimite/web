<?php
session_start();
include('db.php');
$details = $_GET['details'];
$sql = "SELECT * FROM wordli WHERE id = '$details'";
$sth = $pdo->prepare($sql);
$sth->execute();
$roww = $sth->fetchAll();
$row = $roww[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>博客管理系统</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        body{
            background: url(./instagram/bag23.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            /* text-align: center; */
        }
        .wordlist{
            height: 500px;
            margin: 0;
        }
        .list{
            padding: 70px 0 0 0;
        }
        #content{
            margin: 0 auto;
            width: 1157px;
        }
        .up_de{
            width: 1157px;
        }
    </style>
</head>
<body>
    <div>
        <h3><?php echo $_SESSION['user']."";?></h3>
    </div>
    <div class="one">
        <div class="insert">
            <a id="pub_a" href="insert.php">发布文章</a>
            <a id="pub_a" href="home.php">博客主页</a>
            <a id="pub_a" href="admin.php">返回后台</a>
        </div>
    </div>
    <div class="list">
        <ul id="content">
            <div class="wordlist">
                <div class="wordlist_one">
                    <li >标题：<?php echo $row['title'];?></li>   
                    <li style="height: 70px;" >简介：<?php echo $row['descript'];?></li> 
                    <li style="height: 223px;">内容：<?php echo $row['content'];?></li>  
                </div> 
            </a>   
                <div class="up_de">
                    <div class="time">
                        <p>作者：<?php echo $row['author'];?></p>
                        <p>发布时间：<?php echo date("Y-m-d H:i:s",$row['dateline']);?></p>
                    </div>
                    <div class="upde">
                            <a id="pub_a" href="update.php?id=<?php echo $row['id'];?>">修改</a> 
                            <a id="pub_a" href="delete.php?id=<?php echo $row['id'];?>">删除</a>
                    </div>  
                </div>
            </div>
        </ul>
    </div>
</body>
</html>

