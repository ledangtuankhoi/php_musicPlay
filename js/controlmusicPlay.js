var count = 0;
var audio = document.getElementById("audio");
var audioPlayPause = document.getElementById("audioPlayPause");

// console.log(usernameInput)

audioPlayPause.addEventListener("click", function () {
  if (count == 0) {
    count = 1;
    audio.play();
    audioPlayPause.innerHTML = "<i class = 'fa fa-pause' > </i>";
    // audioPlayPause.setAttribute('class',"fa fa-pause")
  } else {
    count = 0;
    audio.pause();
    audioPlayPause.innerHTML = "<i class = 'fa fa-play' > </i>";
  }
});

var audioList = document.querySelectorAll(".aTrigger");

audioList.forEach(function (audioSinger, index) {
  // console.log('audioSource'+ document.getElementById("audioSource").getAttribute("src"));

  audioSinger.addEventListener("click", function (index) {
    thisisAudioSinger = this;

    var dataAudio = this.getAttribute("data-audio");
    var dataActive = this.getAttribute("data-active");
    var audioSource = document.getElementById("audioSource");
    // debugger;

    // audioSource = dataAudio;
    console.log("index" + index);
    console.log(audioList[index]);

    audioSource.setAttribute("src", dataAudio);
    console.log("audioSource" + audioSource.getAttribute("src"));

    // document.getElementById("audioTitle").innerHTML = audioName;
    // audio.load();
    // audio.play();
    console.log("audioList" + audioList[index]);

    for (var i = 0; i < audioList.length; i++) {
      // audioList[i].innerHTML = '<i class="fa fa-play"></i>';
      audioList[i].setAttribute("data-active", "");
    }
    if (dataActive == "") {
      count = 1;
      audio.load();
      audio.play();
      this.setAttribute("data-active", "active");
      audioPlayPause.innerHTML = '<i class="fa fa-pause"></i>';

      // thêm hình ảnh và tên bài hát cho bottom
      var songname = this.getAttribute("data-audio-name");
      var songsinger = this.getAttribute("data-audio-singer");
      var songimg = this.getAttribute("data-audio-img");
      console.log("songimg " + songimg);
      console.log("songname   " + songname);
      console.log("songsingger " + songsinger);
      document.getElementById("musicControlTitle").innerHTML =
        "<a herf=''>" + songname + "</a>";
      document.getElementById("muiscControlsinger").innerHTML =
        "<a herf=''>" + songsinger + "</a>";
      document.getElementById("musiccontrolImg").setAttribute("src", songimg);

      // xự lý thành progress
      player1 = document.getElementById("audio");

      //trượt thành progree mới giá trị margin-left
      var width = document.getElementById("timeline1").offsetWidth;
      function timeCal() {
        var progressbar = document.getElementById("seekObj1");
        progressbar.style.marginLeft =
          width * (audio.currentTime / audio.duration) + "px";
      }

      audio.addEventListener("timeupdate", timeCal);
      ballSeek();
      // timeCal();

      function ballSeek() {
        onplayhead = null;
        playerId = null;
        timeline = document.getElementById("timeline1");
        playhead = document.getElementById("seekObj1");
        timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

        timeline.addEventListener("click", seek);
        playhead.addEventListener("mousedown", drag);
        window.addEventListener("mouseup", mouseUp);
      }

      function seek(event) {
        var player = document.getElementById("audio");
        player.currentTime =
          player.duration * clickPercent(event, timeline, timelineWidth);
      }

      function clickPercent(e, timeline, timelineWidth) {
        return (event.clientX - getPosition(timeline)) / timelineWidth;
      }

      function getPosition(el) {
        return el.getBoundingClientRect().left;
      }

      function drag(e) {
        player1.removeEventListener("timeupdate", timeCal);
        onplayhead = jQuery(this).attr("id");
        playerId = audio;
        var player = document.getElementById(playerId);
        window.addEventListener("mousemove", dragFunc);
        player.removeEventListener("timeupdate", timeUpdate);
      }

      function dragFunc(e) {
        var player = document.getElementById(onplayhead);
        var newMargLeft = e.clientX - getPosition(timeline);

        if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
          playhead.style.marginLeft = newMargLeft + "px";
        }
        if (newMargLeft < 0) {
          playhead.style.marginLeft = "0px";
        }
        if (newMargLeft > timelineWidth) {
          playhead.style.marginLeft = timelineWidth + "px";
        }
      }

      function mouseUp(e) {
        if (onplayhead != null) {
          var player = document.getElementById(playerId);
          window.removeEventListener("mousemove", dragFunc);
          player.currentTime =
            player.duration * clickPercent(e, timeline, timelineWidth);
          player1.addEventListener("timeupdate", timeCal);
          player.addEventListener("timeupdate", timeUpdate);
        }
        onplayhead = null;
      }

      function timeUpdate() {
        var audio = document.getElementById(onplayhead);
        var player = document.getElementById(playerId);
        var playPercent = timelineWidth * (player.currentTime / player.duration);
        audio.style.marginLeft = playPercent + "px";
        // If song is over
        if (player.currentTime == player.duration) {
          player.pause();
        }
      }
    } else {
      count = 0;
      audio.pause();
      // audio.play();
      this.setAttribute("data-active", "pause");
      // audioPlayPause.innerHTML = '<i class="fa fa-play"></i>';
    }

    var duration = document.getElementById("duration");
    setTimeout(() => {
      var s = parseInt(audio.duration % 60);
      var m = parseInt((audio.duration / 60) % 60);

      // console.log(m);
      // console.log(s);

      duration.innerHTML = m + ":" + s;
      audio.addEventListener(
        "timeupdate",
        function () {
          var durationUpdate = document.getElementById("durationUpdate");
          var s = parseInt(audio.currentTime % 60);
          var m = parseInt((audio.currentTime / 60) % 60);

          // console.log(m);5

          durationUpdate.innerHTML = m + ":" + s;
        },
        false
      );
    }, 200);
  });
});
