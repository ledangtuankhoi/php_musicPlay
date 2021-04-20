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
<script src="./ex.js"></script>