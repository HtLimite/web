<?php
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>location='loginh.php';</script>";
        return false;
    }
    include('db.php');
    include('page.php');

if(!empty($_GET['result'])){
        $sql_li = "SELECT * FROM wordli WHERE title  LIKE '%".$_GET['result']."%' OR author LIKE '%".$_GET['result']."%' OR descript LIKE '%".$_GET['result']."%' OR content LIKE '%".$_GET['result']."%'";
    }else{
        $sql_li = $sqlpage;
    }
    $sql = "select * from liuyan order by id desc";
    $sql_message = "SELECT * FROM comments ";

    $sth = $pdo->prepare($sql);
    $sth_li = $pdo->prepare($sql_li);
    $sth_message = $pdo->prepare($sql_message);
    $sth->execute();
    $sth_li->execute();
    $sth_message->execute();

    $rows = $sth->fetchAll();
    $word_li = $sth_li->fetchAll();
    $result_message = $sth_message->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>博客管理系统</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div>
        <h3><?php echo $_SESSION['user']."-blog-admin";?></h3>
    </div>
    <div class="one">
        <div class="insert">
            <a id="pub_a" href="insert.php">发布文章</a>
            <a id="pub_a" href="home.php">博客主页</a>
        </div>
        <div class="search">
            <form action="search.php" method="POST">
                <div>
                    <input class="sear_k" type="text" name="search" placeholder="输入关键字搜索" required='' lay-verify="requried">
                    <input class="sear_sub" type="submit" value="搜索">
                </div>
            </form>
        </div>
    </div>
    <div class="list">
        <ul id="content">
            <?php foreach($word_li as $li => $v){
            ?>
            <div class="wordlist">
            <div class="biga">
            <a class="details" href="details.php?details=<?php echo $v['id']; ?>">
                <div class="wordlist_one">
                    <li>标题：<?php echo $v['title'];?></li>   
                    <li>简介：<?php echo $v['descript'];?></li> 
                    <li style="height: 63px;">内容：<?php echo $v['content'];?></li>  
                </div> 
            </a>
            </div>  
                <div class="up_de">
                    <div class="time">
                        <p>作者：<?php echo $v['author'];?></p>
                        <p>发布时间：<?php echo date("Y-m-d H:i:s",$v['dateline']);?></p>
                    </div>
                    <div class="upde">
                            <a id="pub_a" href="update.php?id=<?php echo $v['id'];?>">修改</a> 
                            <a id="pub_a" href="delete.php?id=<?php echo $v['id'];?>">删除</a>
                    </div>  
                </div>
            </div>
            <div class="mess">
                <h4>评论</h4>
                <div class="message">
                    <?php
                        foreach($result_message as $wordIndex => $uid){
                            if($uid['message'] == $v['id']){
                    ?>
                    <p>评论内容:<span class="message_content"><?php echo $uid['comment']; ?></span></p>
                    <p>昵称：<?php echo $_SESSION['user'];?></p>
                    <p><?php echo date("Y-m-d H:i:s",$uid['addtime']); ?></p>
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="messtext">
                    <form action="comment.php" method="POST">
                        <p>评论内容</p>
                        <input type="hidden" name="message" value="<?php echo $v['id'];?>">
                        <p><textarea name="comment" id="messtext" cols="30" rows="10"></textarea></p>
                        <input type="submit" class="pinglun" value="评论">
                    </form>
                </div>
            </div>
            <?php 
                    }
            ?>
        </ul>
        <div class="index">
            <a id="pub_a" href="admin.php?page=1">首页</a>
            <a id="pub_a" href="admin.php?page=<?php echo $p=$page-1;?>">上一页</a>
            <?php
                for($i=1;$i <= $pagenum;$i++){   
                    if($i==$page){
            ?>
                        <a  class="paging" href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php
                    }elseif($i>10){
            ?>
                        <a id="pub_a" href="admin.php?page=<?php echo $i; ?>">~~</a>
            <?php          
                        break;
            ?>
            <?php      
                    }else{
            ?>
                        <a id="pub_a" href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php
                    }
                }
            ?>
            <a id="pub_a" href="admin.php?page=<?php echo $p=$page+1;?>">下一页</a>
            <a id="pub_a" href="admin.php?page=<?php echo $p=$pagenum;?>">末页</a>
        </div>
    </div>
        <!-- <a href="update.php">管理文章</a> -->
</body>
</html>