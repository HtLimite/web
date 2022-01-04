<?php
include('db.php');
$sql = "select * from liuyan order by id desc";

$sth = $pdo->prepare($sql);
$sth->execute();

$rows = $sth->fetchAll();
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
    <!-- <style>
                body
        {
            margin: 0;
            padding: 0;
        }
        #one,.two,#three,#liyan,.footer
        {
            overflow: hidden;
        }
        #canvas1
        {
            display: block;
            position: fixed;
            bottom: 0;
            transition: all .2s ease;
        }
        .header
        {
            display: inline-block;
            text-align: center;
            margin: auto;
            padding-inline-start: 0;
        }
        .one-1
        {
            text-align: center;
            height: 100px;
            background: #00bcd433;
            min-width: 293px;
        }
        .aone
        {
            text-decoration: none;
            display: inline-block;
            color: white;
            transition: all 0.7s;
            padding: 21.5px 43px;
            animation: donghua1 3s 2s infinite ease-in-out;
        }
        .header li:hover 
        {
            background-color:#00ff9d47;
        }
        #bag
        {
            background-image: url("./instagram/bag19.jpg");
            background-repeat: no-repeat;
            height: 100vh;
            background-size: cover;
            overflow: hidden;
        }
        .header>li:nth-child(2)
        {
            margin-left: 150px;
        }
        .header>li 
        {
            font-size: 44px;
            font-family: long;
            list-style-type: none;
            float: left;
        }
        .visit
        {
            left: 47%;
            position: absolute;
            top: 50vh;
            font-family: cat;
            color: rebeccapurple;
            transform: scale(0);
            animation: donghua4 4s 1 ease-out ;
        }
        @font-face {
            font-family: cat;
            src: url(./font/CatCafe.ttf);
        }
        @font-face {
            font-family: thin;
            src: url(./font/segoeuil.ttf);
        }
        @font-face {
            font-family: long;
            src: url(./font/Montepetrum\ bold.ttf);
        }
        @font-face {
            font-family: rule;
            src: url(./font/corbell.ttf);
        }
        @font-face {
            font-family: mi;
            src: url(./font/MI_LanTing_Regular.ttf);
        }
        @font-face {
            font-family: light;
            src: url(./font/SourceHanSerifTC-Light.otf);
        }
        @font-face {
            font-family: wenquan;
            src: url(./font/文泉驿微米黑.ttf);
        }
        #hudone
        {
            height: 0;
            width: 100%;
            overflow-y: hidden;
            transition: all 1s;
            position: absolute;
            top: 0;
            background-color: #282b2d;
            opacity: 0.9;
        }
        #hover_life
        {
            position: absolute;
            width: 300px;
            height: 470px;
            left: 700px;
            background: #191e31;
            border-radius: 20px;
            cursor: pointer;
            transform: scale(0);
            transition: ease-out all .7s;
        }
        #hover_life img
        {
            width: 100%;
            border-radius: 20px 20px 0 0;
        }
        #hover_life p
        {
            text-align: center;
            color: white;
            margin: -7px;
            font-size: 13px;
        }
        #flexd
        {
            z-index: 1;
            position: fixed;
            top: 50vh;
        }
        #flexd li
        {
            width: 40px;
            height: 40px;
            list-style: none;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            overflow: hidden;
            opacity: .8;
            animation: donghua2 3s 2s infinite ease-in-out;
        }
        #flexd li:hover img
        {
            transform: scale(1.2);
        }
        #flexd li img
        {
            width: 100%;
            transition: all .5s ease-out;
        }
        #flexdnext
        {
            z-index: 1;
            position: fixed;
            top: 50vh;
            left: 80px;
        }
        li
        {
            list-style: none;
        }
        #flexdnext ul li 
        {
            width: 150px;
            height: 150px;
            background-color: #2b241fa1;
            padding: 20px;
        }
        #flexdnext ul li:nth-child(1)
        {
            position: relative;
            top: -73px;
            display: none;
        }
        #flexdnext ul li:nth-child(2)
        {
            position: relative;
            top: -17px;
            display: none;    
        }
        #flexdnext ul li:nth-child(3)
        {
            position: relative;
            top: 34px;
            display: none;
        }
        #flexdnext li img
        {
            width: 100%;
            border-radius: 10px;
        }
        #svg
        {
            height: 35px;
            bottom: 3%;
            position: absolute;
            width: 35px;
            left: 50%;
            fill: #509db7;
            animation: donghua3 ease-in-out 3s 2s infinite ;
            border-radius: 50px;
            padding: 7px;
        }
        #svg:hover
        {
            cursor: pointer;
            background-color: rgb(75 103 125 / 60%);
        }
        .atwo
        {
            color: #818181;
            font-weight: 200;
            text-decoration: none;
            font-size: 30px;
            font-family: light;
            display: block;
            text-align: center;
            margin: 137px 0;
        }
        .atwo:hover,.atwo:focus
        {
            color:#f1f1f1;
        }
        .close
        {
            position: absolute;
            right: 100px;
            font-size: 50px;
            margin: 40px;

        }
        .two
        {
            z-index: 2;
            position: relative;
            height: auto;
            display: flex;
            justify-content: space-between;
            border-bottom-style: ridge;
            background-image: url(./instagram/bag11.jpg);
            background-size: 100% 100%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            padding: 70px 0 ;
        }
        .two h2
        {
            text-align: center;
            margin: 0;
            padding: 10px 0 30px 0;
            font-family: wenquan;
            color: #52c575a3;
        }
        h2:hover
        {
            transform: scale(1.2);
        }
        h2
        {
            transition: all ease-in-out 1s;
        }
        .two p
        {
            margin: 0;
            padding: 50px;
            text-align: center;
            letter-spacing: 3px;
            line-height: 27px;
            font-family: rule;
            color: #13595c;
        }
        #two-2
        {
            position: relative;
            width: 667px;
            height: 400px;
            overflow: hidden;
            top: 53px;
            cursor: pointer;
        }
        .img-list
        {
            display: flex;
            position: relative;
            left: -667px;
            transition: 0.5s ease-in-out;
        }
        .img2{
            width: 100%;
        }
        .but a
        {
            opacity: 0.5;
            background:rgba(0, 0, 0, 0.7);
            font-size: 40px;
            text-decoration: none;
            color: white;

        }
        .but a:hover
        {
            color: rgb(126, 106, 106);
        }
        .but
        {
            position: absolute;
            display: flex;
            justify-content: space-between;
            top: 50%;
        }
        #three
        {
            height: 770px;
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #8cdeeba6;
        }
        #three_one
        {
            margin-left: 150px;
            width: 300px;
        }
        #three_one ul li span
        {
            display: inline-block;
            width: 200px;
            border-radius: 10px;
            border: solid #80ada9;
            padding: 10px;
            margin-bottom: 15px;
            cursor: pointer;
        }
        #three_one ul li span:hover
        {

            background-color:#9dd7ee;
        }
        #three_two
        {
            width: 500px;
            position: relative;
        }
        .duyu
        {
            color: #6f3a3ae3;
            padding: 30px;
            background-color: #8cdeeba6;
            text-align: center;
            line-height: 50px;
            position: relative;
            border: solid #8cdeeba6;
            border-radius: 28px;
        }
        .more
        {
            position: absolute;
            display: none;
            top: 0;
        }
        #worldmore2
        {
            left: 150px;
        }
        .worldmore
        {
            display: inline-block;
            cursor: pointer;
            position: relative;
            left: 94px;
        }
        .worldmore:hover
        {
            animation: donghua5 ease 2s infinite;

        }
        #three_two span
        {
            font-family: wenquan;
            border-bottom-style: groove;
            animation: donghua5 ease 2s infinite;
        }
        #worldsuoluo span:nth-last-child(1)
        {
            position: relative;
            left: 144px;
        }
        .footer
        {
            background-color: rgb(47, 54, 75);
            height: 230px;
        }
        #liuyan
        {
            text-align: center;
            z-index: 2;
            position: relative;
            padding: 70px 0;
            background: url(./instagram/bag13.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }
        #liuyan h3
        {
            padding-bottom: 37px;
            margin: 0;
            color: #ffffff;
            font-family:thin;
        }
        .input1
        {
            width: 500px;
            height: 100px;
            resize: none;
            position: relative;
            min-width: 30px;
            min-height: 30px;
            margin: 0px;
        }
        .input2
        {
            
            width: 100px;
            height: 40px;
        }
        .subliuyan
        {
            color: white;
            background: #009688;
            height: 40px;
            width: 70px;
            border: none;
        }
        .subliuyan:hover
        {
            background-color: #13595c;    
        }
        .liuyan_two
        {
            padding: 10px 0 17px 0;
            width: 505px;
            display: inline-flex;
            justify-content: space-between;
        }
        .talkworld
        {
            padding: 30px;
            margin-bottom: 17px;
            border-bottom: solid 1px #c78569;
        }
        .content
        {
            width: 470px;
            margin: 17px auto;
            padding: 17px;
            border-radius: 10px;
            border: solid #a99191 1px;
            color: #efa689;
            font-family: thin;
        }
        .people_1
        {
            color: #e97545eb;
            margin-right: 237px;
        }
        @media screen and (max-width:1090px){
            .header>li:nth-child(2) 
            {
                margin: 0;
            }
            .header>li 
            {
                font-size: 20px;
            }
            #hover_life
            {
                width: 30vh;
                height: 47vh;
                left: 7vh;
                z-index: 2;
            }
            .visit
            {
            left: 37%;  
            }
            .close
            {
                right: 0;
            }
            .atwo
            {
                font-size: 15px;
            }
            .one-1
            {
                height: auto;
            }
            .aone
            {
                padding: 18px;
            }
            #bag
            {
                background-position-x: 17%;
            }
            #two
            {
                background-size: cover;
                display: block;
                font-size: 17px;
                background-image: url(./instagram/bag16.jpg);
                background-attachment: fixed;
                padding: 130px 0;
            }
            .two h2
            {
                color: #9e9e9e;
            }
            #two-2
            {
            width: 100%;
            height: auto;
            }
            .but 
            {
                width: 100%;
                top: 37%;
            }
            #three
            {
                display: block;
                height: auto;
            }
            #three_one
            {
                left: 7%;
                position: relative;
                width: auto;
                margin-left: auto;
                padding: 130px 0;
            }
            #three_two {
                background: url(./instagram/bag21.jpg);
                z-index: 1;
                width: 100%;
                position: relative;
                margin: 0;
                height: auto;
            }
            .duyu
            {
                border-radius: 0;
                padding-bottom: 77px;
            }
            .worldmore
            {
                left: 3%;
            }
            #worldmore2
            {
                left: 4vh;
            }
            #liuyan
            {
                padding: 70px 30px;
            }
            .input1
            {
                width: 100%;
            }
            .liuyan_two
            {
                width: 100%;
            }
            .content
            {
                width: 90%;
            }
            .people_1
            {
                margin-right: 7vh;
            }
        }
        .footer
        {
            text-align: center;
        }
        .footer p
        {
            padding-top: 30px;
            font-family: wenquan;
            color: #cad3d2db;
            position: relative;
            z-index: 2;
        }
        .footer span
        {
            padding:0 3px;
        }



        @keyframes donghua2 {   
        0% {
            transform: translateY(0%);
        }
        50% {
            transform: translateY(-20%);
        }
        100% {
            transform: translateY(0%);
        }
        }
        @keyframes donghua1 {
        0% {
            transform: translateY(0%);
        }
        50% {
            transform: translateY(10%);
        }
        100% {
            transform: translateY(0%);
        }
        }
        @keyframes donghua3 {
        0% {
            transform: translateY(0%);
        }
        50% {
            transform: translateY(40%);
        }
        100% {
            transform: translateY(0%);
        }
        }
        @keyframes donghua4 {
        0% {
            transform: scale(0);
        }
        60% {
            transform: scale(2.7);
        }
        80% {
            transform: scale(2);
        }
        100%{
            transform: scale(0);
        }
        }
        @keyframes donghua5 {
        0% {
            transform: translateX(0%);
        }
        40% {
            transform: translateX(-20%);
        }
        70% {
            transform: translateX(10%);
        }
        100% {
            transform: translateX(0%);
        }
        }
    </style> -->

</head>
<body>
    <div id="one" style="height: 100vh;  position: relative; overflow:hidden " > 
        <main id ="bag">
            <div class="one-1" id="one-1">
                <canvas id="canvas1"></canvas>
                <ul class="header">
                    <li>
                        <a class="aone" href="#">Reiki</a>
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
                <h3>留言板</h3>
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
        <iframe name="targetIfr" style="display:none"></iframe>
    </div>
    <footer class="footer"> 
        <div>
            <p style="animation: donghua2 ease 2s infinite; margin:0;">Reiki</p>
            <p>的不完整博客</p>
            <p><span>未来可期</span><span>永不言弃</span> <span>云梦仍在</span> </p>
        </div>
    </footer>
    <!-- <script src="./javascript.js"></script> -->
    <script>
                // 背景音乐
        function bagmusic() {
            const obagmu = document.getElementById("bagmu");
            if(obagmu.paused){
                obagmu.play();
            }else{
                obagmu.pause();
            }
        }
        var canvas = document.getElementById('canvas1');
        canvas.style.width = window.innerWidth + "px";
        canvas.style.height = window.innerHeight + "px";
        //music
        const obagmu = document.getElementById("bagmu");
        const music1 = document.getElementById("music1");
        const music2 = document.getElementById("music2");
        const music3 = document.getElementById("music3");
        const music4 = document.getElementById("music4");
        const music5 = document.getElementById("music5");
        const music6 = document.getElementById("music6");
        const music7 = document.getElementById("music7");
        const music8 = document.getElementById("music8");
        music1.addEventListener("click",() => {
            obagmu.src = "./music/断线-Shang_lil_sophy-36878271.mp3";
        });
        music2.addEventListener("click",() => {
            obagmu.src = "./music/Trouble_I'm_In-Twinbed-51571386.mp3";
        });
        music3.addEventListener("click",() => {
            obagmu.src = "./music/浪费-林宥嘉-1238936.mp3";
        });
        music4.addEventListener("click",() => {
            obagmu.src = "./music/蜂鸟(Live)-吴青峰-65066062.mp3";
        });
        music5.addEventListener("click",() => {
            obagmu.src = "./music/微微-傅如乔-92148255.mp3";
        });
        music6.addEventListener("click",() => {
            obagmu.src = "./music/I_Do-911-20632672.mp3";
        });
        music7.addEventListener("click",() => {
            obagmu.src = "./music/Sun-Steerner_Martell-28415359.mp3";
        });
        music8.addEventListener("click",() => {
            obagmu.src = "./music/逆时针向 - Asphyxia（Piano Ver.）.mp3";
        });;
        // 打开地图
        function openmap(){
            const olife = document.getElementById("life");
            const omap = document.getElementById("hover_life");
            if(omap.style.transform == "scale(1)"){
                omap.style.transform = "scale(0)";
            }else{
                omap.style.transform = "scale(1)";}
            omap.addEventListener("mouseleave", () => {
                omap.style.transform = "scale(0)";
            })
        }
        function openabout(){
            document.getElementById("hudone").style.height = "100%";
            document.getElementById("svg").style.display = "none";
            document.getElementById("flexd").style.display = "none";
            document.getElementById("one-1").style.display = "none";
        }
        function closeabout(){
            document.getElementById("hudone").style.height = "0";
            document.getElementById("svg").style.display = "block";
            document.getElementById("flexd").style.display = "block";
            document.getElementById("one-1").style.display = "block";
        }
        // 欢迎字
        const visit = document.getElementById("visit");
        window.onload = function(){ 
            setTimeout(() => {
            visit.style.display = "none";
        },6000);
        };
        // 悬浮扫码
        const owxli = document.getElementById("wxli");
        const owxhiddn = document.getElementById("wxhiddn");
        owxli.addEventListener("mouseenter", () => {
            owxhiddn.style.display = "block";
        });
        owxli.addEventListener("mouseleave", () => {
            owxhiddn.style.display = "none";
        });
        const oqqli = document.getElementById("qqli");
        const oqqhiddn = document.getElementById("qqhiddn");
        oqqli.addEventListener("mouseenter", () => {
            oqqhiddn.style.display = "block";
        });
        oqqli.addEventListener("mouseleave", () => {
            oqqhiddn.style.display = "none";
        });
        const owyyli = document.getElementById("wyyli");
        const owyyhiddn = document.getElementById("wyyhiddn");
        owyyli.addEventListener("mouseenter", () => {
            owyyhiddn.style.display = "block";
        });
        owyyli.addEventListener("mouseleave", () => {
            owyyhiddn.style.display = "none";
        });
        //svg
        const nextpage = document.getElementById("svg");
        function nextpag(){
        const cc = document.getElementById("two");
        let height = 0;
        height += cc.offsetTop;
        window.scrollTo({
            top:height,
            behavior: 'smooth'
        })
        }
        nextpage.addEventListener("click",function () {
            nextpag()
        });

        const worldmore1 = document.getElementById("worldmore1");
        const worldMore = document.getElementById("worldMore");
        const three_two = document.getElementById("three_twoo");
        const worldmore2 = document.getElementById("worldmore2");
        const worldsuoluo = document.getElementById("worldsuoluo");
        worldmore1.addEventListener("click",() => {
            worldMore.style.display = "block";
            three_two.style.opacity = "0";
        })
        worldMore.addEventListener("mouseleave",() => {
            worldMore.style.display = "none";
            three_two.style.opacity = "1";
        })
        worldmore2.addEventListener("click",() => {
            worldsuoluo.style.display = "block";
            three_two.style.opacity = "0";
        })
        worldsuoluo.addEventListener("mouseleave",() => {
            worldsuoluo.style.display = "none";
            three_two.style.opacity = "1";
        })
        // 轮播图
        let oLeft = document.querySelector(".left");
        let oRight = document.querySelector(".right");
        let oImgList = document.querySelector(".img-list");
        var imgwidth = document.getElementById("two-2").offsetWidth;
        var butwidth = document.getElementById("but");
        console.log(imgwidth,butwidth);
        window.onload = function(){
        butwidth.style.width = imgwidth + "px";}
        // 获取照片数量
        let imglength = document.getElementsByClassName("img2");
        // 克隆最后一张与第一张图片
        let clonefristimage = oImgList.firstElementChild.cloneNode();
        let clonelastimage = oImgList.lastElementChild.cloneNode();
        // 无缝克隆
        oImgList.appendChild(clonefristimage);
        oImgList.insertBefore(clonelastimage,oImgList.children[0]);
        // 点击次数统计
        let index = 1;
        // 函数节流
        let lock = true;
        // 下一张
        function next(){
            if(!lock) return;
            index++;
            oImgList.style.left = index * -imgwidth + "px" ;
            oImgList.style.transition = "0.5s ease-in-out";
            if(index === imglength.length - 1){
                setTimeout(() => {
                index = 1;
                oImgList.style.transition = "none";
                oImgList.style.left = -imgwidth + "px";
                },700);
            }
            // 关锁
            lock = false;
            setTimeout(() => {
                lock = true;
            },700);
        };
        oRight.addEventListener("click",next);
        // 上一张
        function prev(){
            if(!lock) return;
            index--;
            oImgList.style.left = index * -imgwidth + "px";
            oImgList.style.transition = "0.5s ease-in-out";
            if(index === 0){
                setTimeout(() => {
                index = imglength.length - 2;
                oImgList.style.left = index * -imgwidth + "px";
                oImgList.style.transition = "none";
                },700);
            }   
            lock = false;
            setTimeout(() => {
                lock = true;
            },700);
        };
        oLeft.addEventListener("click",prev);
        // 自动轮播
        const imgbox = document.getElementById("two-2");
        let autoplay = null;
        if(autoplay == null) {autoplay = setInterval(next, 3000);
        }
        imgbox.addEventListener("mouseenter", () => {
            clearInterval(autoplay);
        });
        imgbox.addEventListener("mouseleave", () => {
            clearInterval(autoplay);
            autoplay = setInterval(next,3000);
        });
        //  canvas
        let canvas1 = document.getElementById('canvas1');
        let context1 = canvas1.getContext('2d');
        let canvasH = window.innerHeight;

        function resizeCanvas() {
            // if (window.innerHeight > 1920) {
            //     canvas1.width = window.innerWidth;
            // }
            // else {
            //     canvas1.width = 1920;
            // }
            canvas1.height = canvasH;
            canvas1.width = window.innerWidth;
        }//设置canvas宽高

        resizeCanvas(canvas1);

        let num = 200;//气泡数量
        let ballX = [];//球心的横坐标
        let ballY = [];//球心的纵坐标
        let ballR = [];//球的半径
        let ballF = [];//小球左右摆动幅度
        let speed = [];//小球向上移动速度
        let colours = ["rgb(133, 128, 125)","rgb(255 0 242)","rgb(255 255 255)","rgb(90 162 167)","rgb(238 219 182)","rgb(32 55 73)","rgb(81 79 83)","rgb(198 161 223)","rgb(20 58 120)"];//小球颜色
        let finalCol=[];
        // let colours = ["rgb(133, 128, 125)"];

        //在随机位置产生num个随机半径的球，储存变量
        for(let i = 0;i < num; i++) {
            let radius = Math.floor(Math.random() * 10 + 3);
            let x = Math.floor(Math.random() * canvas1.offsetWidth);
            let y = Math.floor(Math.random() * canvasH);
            let fudu = Math.floor(Math.random() * 10 + 5);
            let sp = Math.floor(Math.random() * 10 + 5);
            let color = colours[Math.floor(Math.random() * colours.length)];
            ballX.push(x);
            ballY.push(y);
            ballR.push(radius);
            ballF.push(fudu);
            speed.push(sp);
            finalCol.push(color);
        }

        let reX;
        let reY;
        let ballK=[];

        //使小球移动(向上做曲线运动)
        function move(){
            context1.clearRect(0, 0, canvas1.offsetWidth, canvas1.offsetHeight);
            for(let i = 0;i < num; i++) {
                (function (i) {
                    if(ballK[i] == null){
                        ballK[i] = 0;
                    }
                    reX = ballK[i] * speed[i] + ballY[i];
                    reY = 0.5*(ballK[i]) * ballF[i] + ballX[i];
                    if(reX + ballR[i] <= 0){
                        ballY[i] = canvasH;
                        ballK[i] = 0;
                        reX = ballK[i] * speed[i] + ballY[i];
                    }
                    context1.beginPath();
                    context1.fillStyle = finalCol[i];
                    context1.globalAlpha = 0.2;
                    context1.arc(reY, reX, ballR[i], 0, Math.PI * 2);
                    context1.fill();
                    ballK.splice(i,1,ballK[i]);
                    ballK[i]-=0.1;
                })(i);
            }
        }
        setInterval(move,20);//定时器
        //留言板
        let liuyanSub = document.getElementById("liuyanSub");
        liuyanSub.addEventListener("click",() => {
            setTimeout(() =>{window.location.reload(true);
            },100) ;
            });
        function beforeSubmit(form){
            if(form.frist.value == '' || form.second.value == ''){
            alert('内容和名字不可以为空哦');
            form.frist.focus();
            return false;}
            return true;
        }
        const story = document.getElementById("story");
        const hh = document.getElementById("three");
        console.log(story,hh);
        story.addEventListener("click",() => {
            let height_1 = 0;
            height_1 += hh.offsetTop;
            console.log(height_1);
            window.scrollTo({
                top:height_1,
                behavior:'smooth'
            })
        });
    </script>
</body>
</html>