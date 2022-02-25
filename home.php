<?php
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>location='loginh.php';</script>";
        return false;
    }
    include('db.php');
    $sql = "select * from liuyan order by id desc";
    $sql_li = "SELECT * FROM wordli ORDER BY id DESC";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>Reiki</title>
    <link rel="icon" href="./instagram/Reiki (2).icon" type="image/x-icon">
    <link rel="stylesheet" href="./style.css" >
</head>
<body>
    <div id="one" style="height: 100vh;  position: relative; overflow:hidden " > 
        <main id ="bag">
            <div class="one-1" id="one-1">
                <canvas id="canvas1"></canvas>
                <ul class="header">
                    <li>
                        <a class="aone" href="loginh.php">Reiki</a>
                    </li>
                    <li>
                        <a class="aone" href="#" id="story" >story</a>
                    </li>
                    <li>
                        <a class="aone" id="life" href="#" onclick="openmap()" >life</a>
                        <div id="hover_life">
                            <img src="./instagram/map.jpg" alt="行走的人生">
                            <p>人生需行走，未来亦可期！</p>
                        </div>
                    </li>
                    <li>
                        <a class="aone" href="#" onclick="bagmusic()" title="暂停/播放音乐" >music</a>
                        <audio id="bagmu" src="./music/So_Lo-Kate_Havnevik-9820204.mp3" autoplay ></audio>
                    </li>
                    <li>
                        <a class="aone" href="#" onclick="openabout()" title="更多">about</a>
                    </li>
                </ul>
                <div id="login"><a href="loginh.php" title="登录博客">login</a></div>
            </div>
            <div id="hudone">
                <a class="atwo close" href="javascript:void(0)" onclick="closeabout()" >&times;</a>
                <a class="atwo" href="#">谢谢访问！</a>
                <a class="atwo" href="#">图片均来自互联网（侵删）</a>
                <a class="atwo" href="#">所有音乐来源-网易云与酷我（侵删）</a>
                <a class="atwo" href="#" >部分文字素材来源-网易云（侵删）</a>
            </div>
            <div class="visit"  id="visit" ><h1>Welcome</h1></div>
        </main>
      <div id="flexd">
            <ul>
                <li id="wxli">
                    <img src="./instagram/wx.png" alt="">
                </li>
                <li id="qqli">
                    <img src="./instagram/qq.png" alt="">
                </li>
                <li id="wyyli">
                    <img src="./instagram/wyy.png" alt="">
                </li>
            </ul>
        </div>
        <div id="flexdnext">
            <ul>
                <li id="wxhiddn" >
                    <img class="wximg" src="./instagram/wx.jpg" alt="">
                </li>
                <li id="qqhiddn" >
                    <img class="qqimg" src="./instagram/qq.jpg" alt="">
                </li>
                <li id="wyyhiddn" >
                    <img class="wyyimg" src="./instagram/wyy.jpg" alt="">
                </li>
            </ul>
        </div>
        <svg id="svg" >
            <path d="M15.992 25.304c-0 0-0 0-0.001 0-0.516 0-0.981-0.216-1.31-0.563l-0.001-0.001-14.187-14.996c-0.306-0.323-0.494-0.76-0.494-1.241 0-0.998 0.809-1.807 1.807-1.807 0.517 0 0.983 0.217 1.313 0.565l0.001 0.001 12.875 13.612 12.886-13.612c0.331-0.348 0.797-0.565 1.314-0.565 0.481 0 0.918 0.187 1.242 0.493l-0.001-0.001c0.723 0.687 0.755 1.832 0.072 2.555l-14.201 14.996c-0.33 0.348-0.795 0.564-1.311 0.564-0.001 0-0.003 0-0.004 0h0z"></path>
        </svg>
    </div>
    <div class="two" id="two">
        <div class="two-1" >
            <h2>Sense</h2>
            <p>有些人听歌是听歌词，因为其中相似的境遇而哭而笑而感怀。爱一首歌，常常是因为某句歌词。
                <br>
                但真正动人的不是那句歌词，而是在你生命中那些关于这首歌的故事。
            
                <br>于是，写歌的人在写他的故事，听歌的人在回忆往事。
                <br>
                <br>总会在某个瞬间，突然听到曾经很喜欢、喜欢到每天重复地听也不会厌的一首歌，<br>
                幽幽地想起一起听歌的那个人，想起那时的那么年轻稚嫩的自己 。
                <br>
                <br>前尘旧事，丝丝缕缕，重回心头；
                <br>于是明白了，往昔如歌，缘起不灭。
                <br>
                <br>有时候听歌不是因为歌好听，而是因为歌词写的像自己。<br>
                所以啊，人一旦矫情起来，就会觉得每首歌都像在唱自己。
                </p>
        </div>
        <div id ="two-2">
            <div class="img-list" >
                <img class="img2" src="./instagram/bag8.jpg" alt="">
                <img class="img2" src="./instagram/bag2.jpg" alt="">
                <img class="img2" src="./instagram/bag3.jpg" alt="">
                <img class="img2" src="./instagram/bag4.jpg" alt="">
                <img class="img2" src="./instagram/bag5.jpg" alt="">
                <img class="img2" src="./instagram/bag22.jpg" alt="">
                <img class="img2" src="./instagram/bag7.jpg" alt="">
                <img class="img2" src="./instagram/bag9.jpg" alt="">
                <img class="img2" src="./instagram/bag10.jpg" alt="">
                <img class="img2" src="./instagram/bag11.jpg" alt="">
                <img class="img2" src="./instagram/bag12.jpg" alt="">
                <img class="img2" src="./instagram/bag14.jpg" alt="">
                <img class="img2" src="./instagram/bag15.jpg" alt="">
                <img class="img2" src="./instagram/bag17.jpg" alt="">
                <img class="img2" src="./instagram/bag18.jpg" alt="">
                <img class="img2" src="./instagram/bag20.jpg" alt="">
            </div>
            <div class="but" id="but" >
                <a href="javascript:;" class="left" title="上一张"><</a>
                <a href="javascript:;" class="right" title="下一张">></a>
            </div>
        </div>
    </div>
    <div id="three">
        <div id="three_one" style="text-align: center;">
            <h2 style="margin: 0;padding: 20px 0;" >Music</h2>          
            <ul style="padding-inline-start: 0;">
                <li>
                    <span id="music1" >断线- Shang / lil sophy</span> 
                </li>
                <li>
                    <span id="music2" >Trouble I'm In  Twinbed</span>
                </li>
                <li>
                    <span id="music3" >浪费- 林宥嘉</span>
                </li>
                <li>
                    <span id="music4" >蜂鸟- 吴青峰</span>
                </li>
                <li>
                    <span id="music5" >微微- 傅如乔</span>
                </li>
                <li>
                    <span id="music6" >I Do- 911</span>
                </li>
                <li>
                    <span id="music7" >Sun- Steerner / Martell</span>
                </li>
                <li>
                    <span id="music8" >Asphyxia（Piano Ver.）</span>
                </li>
                <li></li>
            </ul>
        </div>
        <div id="three_two">
            <div class="duyu" id="three_twoo" >
                <h2>喁喁独语</h2>
                <span>人一定要相信点什么，要有信仰，要对生活充满热情，要努力向前，要向着光前进。</span>
                <br>
                <span>抑郁时天塌了，乐观时没有天
                    人们总是会感到不快乐，也许可能是所得到的，不及自己的期待，没有满足内心。我们总是要和舒心的人在一起，才会没有太多的拘束，没有无由的猜疑，没有戒心，没有那些虚伪……</span>
                <div class="worldmore" id="worldmore1" >更多</div>
                <h2>梭罗所言</h2>
                <span>若官能仅仅针对外在世界，则一无所用，你行至何处、行程多远皆无意义</span>
                <div class="worldmore" id="worldmore2">更多</div>
            </div>
            <div class="duyu more" id="worldMore" >
                <span>
                    人生或许会有很多种可能，我们无法预知着明天会发生什么，也许改变命运只需一颗小小的信念，抑或是大到永无可变之日。永远崇尚沉迷似的、着魔一般、不可描述的高尚的虚无缥缈的精神，而也永远无动于衷。既怀念过往，亦期待将来。目光所及，只不过是狭窄的独立的思维空间。对于一个疯子而言，奇怪的从来不是自己，而是他人的目光。恰如子非鱼，焉知鱼之乐。任何具有深刻意义的言论，只有拥有同深度的心境，才会理解。那些潜移默化，不可描述，虚无缥缈的东西，没有人能说清，没有人能离得开。通常无法被人理解的事物，被称作奥妙和无知。</span>
            </div>
            <div id="worldsuoluo" class="duyu more" >
                <span>古典的作品如果不是最崇高的人类思想的记录，那又是什么呢？它们却是从街头巷尾的琐碎平凡之中被提炼出来的语言，是永久的暗示，具有永恒的激发力量。</span>
                <br>
                <span>与我们自己的私人意见相比，舆论是一个软弱的暴君。恰恰是一个人对自己的看法，决定了他的命运，更确切地说，是指出了他的命运。</span>
                <br>
                <span>“无论两条腿如何努力，也无法让两颗心的距离更加接近” </span>
                <br>
                <span>天空既在我们的头上又在我们的脚下。 </span>
                <br>
                <span>唯有我们觉醒之际，天才会破晓。破晓的，不止是黎明。太阳只不过是一颗晨星。</span>
                <br>
                <span>所谓的听天由命，是一种得到证实的绝望。</span>
                <br>
                <span> ———梭罗 《瓦尔登湖》</span>
            </div>
        </div>
    </div>
    <div id="liuyan">
        <form action="save.php" method="POST" target="targetIfr" name="form" onsubmit="return beforeSubmit(this);" >
            <div>
                <h3 id="h_three">留言板</h3>
                <textarea name="frist" class="input1" ></textarea>
            </div>         
            <div class="liuyan_two" >
                <input name="second" type="text"  class="input2">
                <input type="submit"  value="留言" id="liuyanSub" class="subliuyan">

            </div>
            <?php
                foreach($rows as $key => $value){
                    
                    
                ?>
            <ul class="content" >
                <li class="talkworld">
                    <span><?php echo $value['talkworld'];?></span>
                </li>
                <li class="people" >
                    <span class="people_1" ><?php echo $value['people'];?></span>
                    <span><?php echo date("Y-m-d H:i:s",$value['intime']); ?></span>
                </li>
            </ul>
            <?php
                }
                ?>
        </form>
    </div>
    <div class="list">

    <ul id="content">
                <h3 id="h_three">文章</h3>
            <?php foreach($word_li as $li => $v){
            ?>
            <div class="wordlist">
            <div class="biga"><a  class="details" href="details.php?details=<?php echo $v['id']; ?>">
                <div class="wordlist_one">
                    <li>标题：<?php echo $v['title'];?></li>   
                    <li>简介：<?php echo $v['descript'];?></li> 
                    <li style="height: 63px;">内容：<?php echo $v['content'];?></li>  
                </div> 
            </a></div>  
                <div class="up_de">
                    <div class="time">
                        <p>作者：<?php echo $v['author'];?></p>
                        <p>发布时间：<?php echo date("Y-m-d H:i:s",$v['dateline']);?></p>
                    </div>
                </div>
            </div>
            <?php 
                    }
            ?>
        </ul>
    </div>
        <iframe name="targetIfr" style="display:none"></iframe>
    <footer class="footer"> 
        <div>
            <p style="animation: donghua2 ease 2s infinite; margin:0;">Reiki</p>
            <p>的不完整博客</p>
            <p><span>未来可期</span><span>永不言弃</span> <span>云梦仍在</span> </p>
        </div>
    </footer>
    <script src="./javascript.js"></script>
</body>
</html>