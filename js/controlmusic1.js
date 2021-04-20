document.addEventListener("DOMContentLoaded", () => {
    var count = 0;
    var audio = document.getElementById('audio');


    // audioStop.addEventListener('click', function() {
    //     count = 0;
    //     audio.pause();
    //     audio.currentTime = 0;
    //     audioPlayPause.innerHTML = "<i class='text-dark m-2 fs-1 fa fa-play'></i>";
    //     audioPlayPause.className = "";
    //     audioStop.className = "";
    //     document.getElementById('audioTitel').innerHTML = "$nbsp;"

    // })

    var audioList = document.querySelectorAll('.aTrigger');
    // var audioList = document.getElementsByClassName('.aTrigger');
    audioList.forEach(
        /**
         * 
         * @param {HTMLAudioElement} audioSingle 
         */
        (audioSingle) => {
            // var dataAudioName = audioSingle.getAttribute("data-audio");
            // var audioName = dataAudioName.substring(dataAudioName.lastIndexOf("/") + 1, dataAudioName.length);

            // // audioList[index].getElementsByClassName('audio-list-in').innerHTML = audioName;
            // // audioList[index].nextElementSibling.innerHTML = audioName;


            // audioSingle.getElementsByClassName('audio-list-in').innerHTML = audioName;

            // if (audioSingle.nextElementSibling) {
            //     audioSingle.nextElementSibling.innerHTML = audioName;
            // }

            // audioSingle.addEventListener('click', function(index) {
            //     thisisAudioSingle = this;
            //     audioPlayPause.className = "active"
            //     audioStop.className = "active"
            //     var dataAudio = this.getAttribute('data-audio')
            //     var dataActive = this.getAttribute('data-active')
            //     var audioSource = document.getElementById('audioSource')
            //     audioSource.src = dataAudio;
            //     document.getElementById("audioTitle").innerHTML = audioName;
            //     audio.load();
            //     audio.play();
            // })

            // this function to get attribute data-isPlay in audio file
            function getIsPlay(audioFile) {
                return audioFile.getAttribute("data-isPlay");
            }

            // This function to set attrbute pause for audio file
            function setPause(audioFile) {
                audioFile.pause();
                audioFile.setAttribute("data-isPlay", "false");


            }

            // This function to set attrbute play for audio file
            function setPlaying(audioFile) {
                count = 1;
                audioFile.play();
                audioFile.setAttribute("data-isPlay", "true");

                var songname = audioSingle.querySelector(".namesong").getAttribute("data-audio-name");
                var songsinger = audioSingle.querySelector(".songsinger").getAttribute("data-audio-singer");
                var songimg = audioSingle.querySelector(".audio-img").getAttribute("data-audio-img");

                console.log('song img ' + songimg);
                console.log('songname   ' + songname);
                console.log('songsingger ' + songsinger);

                // var asd = document.getElementById("nutplayPause");
                // asd.innerHTML = '<i class="fas fa-Pause  "></i>';
                // console.log(asd);





                document.getElementById("audioPlayPause").setAttribute("class", 'fas fa-pause ')
                document.getElementById("musicControlTitle").innerHTML = "<a>" + songname + "</a>";
                document.getElementById("muiscControlsinger").innerHTML = "<a>" + songsinger + "</a>";
                document.getElementById("musiccontrolImg").setAttribute("src", songimg);

            }

            /**
             * 
             * @param {HTMLAudioElement} audioFile 
             */
            function pauseAllAndPlayIt(audioFile) {
                // Pause all and just play above argument
                audioList.forEach((el) => {

                    const _audioFile = el.querySelector(".audio");
                    console.log("audiofile" + _audioFile);
                    // Compare audio not equal with current Audio to pause it
                    if (audioFile !== _audioFile) {
                        setPause(_audioFile);
                    }
                })

                if (audioFile) {
                    // Listen to me
                    const isPlaying = getIsPlay(audioFile);

                    if (isPlaying && isPlaying === "true") {
                        setPause(audioFile);
                        return;
                    }

                    setPlaying(audioFile);
                }
            }

            pauseAllAndPlayIt();

            audioSingle.addEventListener("click", () => {
                pauseAllAndPlayIt(audioSingle.querySelector(".audio"));
            })

            // To detect audio playing to pause it and playing anything audio we were clicked

            audioPlayPause.addEventListener('click', function() {
                    if (count == 0) {
                        count = 1;
                        audioSingle.querySelector(".audio").play();
                        // console.log('play' + audioSingle.querySelector(".audio"));
                        console.log('play');
                        // console.log('play');
                        // audioPlayPause.innerHTML = "<i class='text-dark m-2 fs-1 fa fa-pause'></i>";
                        document.getElementById("audioPlayPause").setAttribute("class", 'fas fa-pause ')

                    } else {
                        count = 0;
                        audioSingle.querySelector(".audio").pause();
                        console.log('pause');
                        // console.log('pause' + audioSingle.querySelector(".audio"));

                        // audioPlayPause.innerHTML = "<i class='text-dark m-2 fs-1 fa fa-play'></i>";
                        document.getElementById("audioPlayPause").setAttribute("class", 'fas fa-play ')


                    }
                })
                // console.log(audioPlayPause);

        })



})





var Duration = document.getElementById("duration") || {};
setTimeout(function() {
    var s = parseInt(audio.duration % 60);
    var m = parseInt((audio.duration / 60) % 60);
    // var m = 0;
    Duration.innerHTML = m + ":" + s;
    audio.addEventListener("timeupdate", function() {
        var durationUpdate = document.getElementById("durationUpdate");
        var s = parseInt(audio.currentTime % 60);
        var m = parseInt((audio.currentTime / 60) % 60);
        durationUpdate.innerHTML = m + ":" + s;

    }, false)
}, 200);