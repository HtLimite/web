<?php
    include('db.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM liuyan WHERE id=$id ";
    $sql_li = "SELECT * FROM wordli WHERE id=$id";
    session_start();

    $sth = $pdo->prepare($sql);
    $sth_li = $pdo->prepare($sql_li);
    $sth->execute();
    $sth_li->execute();

    $rows = $sth->fetchAll();
    $word_li = $sth_li->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改文章</title>
    <style>
        body{    
            text-align: center;
            color: #f39898;
            background: url(./instagram/bag20.jpg);
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
            color: #478ba1;
            border: solid;
            padding: 5px 18px;
            font-size: 13px;
            background-color:#daa08a7a;
            border-radius: 3px;
        }
        a:hover{
            background-color: #daa08af2;

        }
    </style>
</head>
<body>
    <div class="big_title">
        <h2><?php echo $_SESSION['user']."后台管理系统";?></h2>
    </div>
    <div class="middle">
        <form action="updateSql.php" method="POST">
            <div><h3>修改文章</h3></div>
            <input type="hidden" name="id" value="<?php echo $word_li[0]['id'];?>">
            <div id="title">标题：
                <input type="text" name="title" required="" lay-verify="required" value="<?php echo $word_li[0]['title'];?>" class="title">
            </div>
            <div id="author">作者：
                <input type="text" name="author" required="" lay-verify="required" value="<?php echo $word_li[0]['author'];?>" class="author">
            </div>
            <div id="descript"><p>简介：</p>
                <textarea  required="" lay-verify="required"  name="descript" id="" cols="30" rows="10" class="descript">
                    <?php echo $word_li[0]['descript'];?>
                </textarea>
            </div>
            <div id="content"><p>内容：</p>
                <textarea  required="" lay-verify="required " name="content" id="" cols="30" rows="10" class="content">
                    <?php echo $word_li[0]['content'];?>
                </textarea>
            </div>
            <div id="sub"> 
                <input class="sub" type="submit" value="修改文章">
                <a href="admin.php">返回后台</a>
            </div>
        </form>
    </div>
</body>
</html>