var count = 0;

var audioList = document.querySelectorAll(".like");

audioList.forEach(function (audioSinger, index) {
  // console.log('audioSource'+ document.getElementById("audioSource").getAttribute("src"));

  audioSinger.addEventListener("click", function (index) {
    thisisAudioSinger = this;
    var songname = this.getAttribute("data-audio-name");
    console.log("songname   " + songname);
    // console.log("this   " + this);
    //   console.log("like")
    //   console.log("index" + index);
    // console.log(audioList[index]);
  });
});
