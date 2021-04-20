var count = 0;
var audio = document.getElementById('audio');
var audioPlayPause = document.getElementById('audioPlayPause');


audioPlayPause.addEventListener('click', function() {
    if (count == 0) {
        count = 1;
        audio.play();
        audioPlayPause.innerHTML = "<i class = 'fa fa-pause' > </i>";
        // audioPlayPause.setAttribute('class',"fa fa-pause")
    }else{
        count = 0;
        audio.pause();
        audioPlayPause.innerHTML = "<i class = 'fa fa-play' > </i>";
    }
})


var audioList = document.querySelectorAll('.aTrigger');
audioList.forEach(function(audioSinger,index){
    var dataAudioName = audioSinger.getAttribute("data-audio");
    // var audioName = dataAudioName.substring(dataAudioName.lastIndexOf("/") + 1 ,dataAudioName.length);

    
    // console.log('audioName'+ audioName);
    //     console.log('audioList[index])'+ audioList[index]);

    
    
    // audioList[index].nextElementSibling.innerHTML = audioName;
    audioSinger.addEventListener('click',function(index){
        thisisAudioSinger = this;
     
       
        var dataAudio = this.getAttribute('data-audio');
        var dataActive= this.getAttribute('data-active');
        var audioSource = document.getElementById("audioSource");

        // audioSource = dataAudio;
        audioSource.setAttribute("src", dataAudio);
        // console.log('audioSource'+ audioSource.getAttribute("src"));


        // document.getElementById("audioTitle").innerHTML = audioName;
        // audio.load();
        // audio.play();

        for(var i = 0; i < audioList.length; i++){
            // audioList[i].innerHTML = '<i class="fa fa-play"></i>';
            audioList[i].setAttribute("data-active", "");
        }
        if(dataActive == ''){
            count = 1;
            audio.load();
            audio.play();
            this.setAttribute("data-active", "active");
            audioPlayPause.innerHTML = '<i class="fa fa-pause"></i>';


            // var songname = audioSingle.querySelector(".namesong").getAttribute("data-audio-name");
            // var songsinger = audioSingle.querySelector(".songsinger").getAttribute("data-audio-singer");
            // var songimg = audioSingle.querySelector(".audio-img").getAttribute("scr");

            
            var songname = audioSinger.querySelector(".namesong").getAttribute("data-audio-name");
            var songsinger = audioSinger.querySelector(".songsinger").getAttribute("data-audio-singer");
            var songimg = audioSinger.querySelector(".audio-img").getAttribute("src");
            
            // console.log(songimg);

            console.log('song img ' + songimg);
            console.log('songname   ' + songname);
            console.log('songsingger ' + songsinger);

            // var asd = document.getElementById("nutplayPause");
            // asd.innerHTML = '<i class="fas fa-Pause  "></i>';
            // console.log(asd);





            document.getElementById("musicControlTitle").innerHTML = "<a>" + songname + "</a>";
            document.getElementById("muiscControlsinger").innerHTML = "<a>" + songsinger + "</a>";
            document.getElementById("musiccontrolImg").setAttribute("src", songimg);


        }else{
            count = 0;
            audio.pause();
            // audio.play();
            this.setAttribute("data-active", "pause");
            // audioPlayPause.innerHTML = '<i class="fa fa-play"></i>';
        }

        var duration = document.getElementById("duration");
        setTimeout(() => {
            var s = parseInt(audio.duration % 60);
            var m = parseInt((audio.duration / 60)% 60);

            console.log(m);
            console.log(s);


            duration.innerHTML = m + ":" + s;
            audio.addEventListener("timeupdate", function (){
                var durationUpdate = document.getElementById("durationUpdate");
                var s = parseInt(audio.currentTime % 60);
                var m = parseInt((audio.currentTime / 60)% 60);

                console.log(m);
                
                durationUpdate.innerHTML = m + ":" + s;
            },false)
        }, 200);

    })

})