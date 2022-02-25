<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>发布文章</title>
    <style>
        body{    
            text-align: center;
            color: white;
            background: url(./instagram/bag22.jpg);
            background-attachment: fixed;
            /* background-repeat: no-repeat; */
            background-size: 100%;
        }
        .big_title{
            text-align: left;
            margin: 40px;
        }
        h3{
            margin: 73px 0;
        }
        .title,.author{
            width: 300px;
            height: 30px;
        }
        .descript{
            width: 557px;
            height: 77px
        }
        .content{
            height:177px;
            width: 557px;
        }
        #title,#author{
            margin-bottom: 30px;
        }
        .sub{
            width: 103px;
            height: 30px;
            margin-top: 30px;
        }
        a{
            text-decoration: none;
            color: #004962;
            border: solid;
            padding: 6px 20px;
            font-size: 13px;
            background-color:#a6c4d5ba;
            border-radius: 3px;
        }
        a:hover{
            background-color: #478ba1c7;

        }
    </style>
</head>
<body>
    <div class="box">
        <div class="big_title">
            <h2><?php echo $_SESSION['user']."后台管理系统";?></h2>
        </div>
        <div class="middle">
        <form action="insertSql.php" method="POST">
            <div><h3>发布文章</h3></div>
            <div id="title">标题：
                <input type="text" name="title" required="" lay-verify="required"  class="title">
            </div>
            <div id="author">作者：
                <input type="text" name="author" required="" lay-verify="required"  class="author">
            </div>
            <div id="descript"><p>简介：</p>
                <textarea  required="" lay-verify="required"  name="descript" id="" cols="30" rows="10" class="descript"></textarea>
            </div>
            <div id="content"><p>内容：</p>
                <textarea  required="" lay-verify="required " name="content" id="" cols="30" rows="10" class="content"></textarea>
            </div>
            <div id="sub"> 
                <input class="sub" type="submit" value="发布文章">
                <a href="admin.php">返回后台</a>
            </div>
        </form>
    </div>
    </div>
</body>
</html>