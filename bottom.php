<div id="bottom">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/bottom.css">
    <nav class="navbar fixed-bottom navbar-expand-sm bg">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarCollapse">



            <div class="d-flex justify-content-start">


                <div id="control_left" class="d-flex justify-content-center align-items-center">
                    <div class="" style=" border-radius: 50px;  margin: 0 10px;   width: 50px; object-fit: cover">
                        <img id="musiccontrolImg" class="rounded-circle" src="" style=" width: 100% ;   ">

                    </div>
                    <div class="ml-2 mr-4 " style="width: 200px">
                        <div id="musicControlTitle" style="white-space: nowrap; overflow: hidden;"></div>
                        <div id="muiscControlsinger"></div>
                    </div>
                </div>
            </div>
            <div id="control_center" style="width: 800px;">
                <div>
                    <div class="d-flex justify-content-center ">
                        <button class="btn ">
                            <i class="fas fa-redo-alt "></i>
                        </button>
                        <button class="btn ">
                            <i class="fas fa-backward "></i>
                        </button>
                        <div class="d-flex flex-column">

                            <button id="audioPlayPause" class=" btn  border border-dark rounded-circle  ">
                                <i class="fas fa-play  "></i>

                            </button>

                        </div>

                        <button class="btn ">
                            <i class="fas fa-forward "></i>
                        </button>
                        <button class="btn ">
                            <i class="fas fa-random "></i>
                        </button>
                    </div>
                    <div class="controls d-flex justify-content-center align-items-center">
                        <span id="durationUpdate">00</span>
                        <div id="progress" class="mx-3">
                            <div id="timeline1">
                                <div id="seekObj1" class="playhead" style="margin-left: 0px;"></div>
                            </div>
                        </div>
                        <span id="duration">00</span>
                    </div>


                </div>

            </div>
            <div id="control_right" style="width: 200px">
                <div class="d-flex justify-content-center align-items-center">

                <i class="fa fa-volume-down fs-2"  aria-hidden="true"></i>
                <div class="progress_volume"></div>

                </div>

            </div>
        </div>
    </nav>
</div>

<!-- <script src="./js/bottom.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>