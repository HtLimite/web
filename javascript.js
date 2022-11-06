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

let num = 100;//气泡数量
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
//js跳转
const story = document.getElementById("story");
const hh = document.getElementById("three");
console.log(story,hh);
story.addEventListener("click",() => {
    let height_1 = 0;
    // height_1 += hh.offsetTop;
    height_1 += document.body.scrollTop;
    console.log(height_1);
    window.scrollTo({
        top:height_1,
        behavior:'smooth'
    })
});
