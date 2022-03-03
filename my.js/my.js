function play(){
    const video=document.getElementById("music");
    if(video.paused){
        video.play();
    }else{
        video.pause();
    }
    }