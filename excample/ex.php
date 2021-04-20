<style>
    div#timeline1 {
        width: 100%;
        background: red;
        display: block;
    }

    div#seekObj1 {
        width: 20px;
        height: 20px;
        background: #000;
        border-radius: 50%;
    }
</style>

<!-- <li> -->
    <!-- <div class="audio-player"> -->
        <!-- <div class="track-title">Facts</div> -->
            <div id="seekObjContainer">
                <div id="timeline1">
                    <div id="seekObj1" class="playhead" style="margin-left: 0px;"></div>
                </div>
            </div>
        <!-- <div class="player-controls scrubber"> -->
            <!-- <small class="start-time"></small> -->
            <div class="play-pause">play</div>
            <!-- <small class="end-time"></small> -->
        </div>
        <!-- <div class="audio-wrapper"> -->
            <audio id="player2" preload="auto">
                <source src="../audio/audio2.mp3" type="audio/mp3">
            </audio>
        <!-- </div>
    </div>
</li> -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script>
    var player1, onplayhead, playerId, timeline, playhead, timelineWidth;
    jQuery(window).on("load", function() {
        audioPlay();
        ballSeek();

    });

    function audioPlay() {
        /*var player = document.getElementById("player2");*/
        var player = $("#player2")[0];
        //alert(player);
        player.play();
        initProgressBar();
        isPlaying = true;
    }

    function initProgressBar() {
        jQuery(".play-pause").empty().text("PAUSE");
        player1 = document.getElementById("player2");
        player1.addEventListener("timeupdate", timeCal);
        var playBtn = jQuery(".play-pause");
        playBtn.click(function() {
            if (player1.paused === false) {
                player1.pause();
                isPlaying = false;
                jQuery(".play-pause").empty().text("PLAY");

            } else {
                player1.play();
                isPlaying = true;
                jQuery(".play-pause").empty().text("PAUSE");
            }
        });

    }

    function timeCal() {
        var width = jQuery("#timeline1").width();
        var length = player1.duration;
        var current_time = player1.currentTime;

        // calculate total length of value
        var totalLength = calculateTotalValue(length);
        //console.info(totalLength);
        jQuery(".end-time").html(totalLength);

        // calculate current value time
        var currentTime = calculateCurrentValue(current_time);
        jQuery(".start-time").html(currentTime);

        var progressbar = document.getElementById("seekObj1");
        progressbar.style.marginLeft = width * (player1.currentTime / player1.duration) + "px";

    }

    function calculateTotalValue(length) {
        var minutes = Math.floor(length / 60);
        var seconds_int = length - minutes * 60;
        if (seconds_int < 10) {
            //console.info("here");
            seconds_int = "0" + seconds_int;
            //console.info(seconds_int);
        }
        var seconds_str = seconds_int.toString();
        var seconds = seconds_str.substr(0, 2);
        var time = minutes + ':' + seconds;
        //console.info(seconds_int)
        return time;
    }

    function calculateCurrentValue(currentTime) {
        var current_hour = parseInt(currentTime / 3600) % 24,
            current_minute = parseInt(currentTime / 60) % 60,
            current_seconds_long = currentTime % 60,
            current_seconds = current_seconds_long.toFixed(),
            current_time = (current_minute < 10 ? "0" + current_minute : current_minute) + ":" + (current_seconds < 10 ? "0" + current_seconds : current_seconds);
        return current_time;
    }

    function ballSeek() {
        onplayhead = null;
        playerId = null;
        timeline = document.getElementById("timeline1");
        playhead = document.getElementById("seekObj1");
        timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

        timeline.addEventListener("click", seek);
        playhead.addEventListener('mousedown', drag);
        window.addEventListener('mouseup', mouseUp);

    }


    function seek(event) {
        var player = document.getElementById("player2");
        player.currentTime = player.duration * clickPercent(event, timeline, timelineWidth);
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
        playerId = jQuery(this).parents("li").find("audio").attr("id");
        var player = document.getElementById(playerId);
        window.addEventListener('mousemove', dragFunc);
        player.removeEventListener('timeupdate', timeUpdate);
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
            window.removeEventListener('mousemove', dragFunc);
            player.currentTime = player.duration * clickPercent(e, timeline, timelineWidth);
            player1.addEventListener("timeupdate", timeCal);
            player.addEventListener('timeupdate', timeUpdate);
        }
        onplayhead = null;
    }

    function timeUpdate() {
        var player2 = document.getElementById(onplayhead);
        var player = document.getElementById(playerId);
        var playPercent = timelineWidth * (player.currentTime / player.duration);
        player2.style.marginLeft = playPercent + "px";
        // If song is over
        if (player.currentTime == player.duration) {
            player.pause();
        }

    }
</script>