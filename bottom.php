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
                <div>


                    <div class="volume">
                        <div class="volume-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker" />
                            </svg>
                        </div>
                        <style>
                            .green-audio-player .slider {
                                flex-grow: 1;
                                background-color: #d8d8d8;
                                cursor: pointer;
                                position: relative;
                            }

                            .green-audio-player .slider .gap-progress {
                                background-color: #44bfa3;
                                border-radius: inherit;
                                position: absolute;
                                pointer-events: none;
                            }

                            .green-audio-player .slider .gap-progress .pin {
                                height: 16px;
                                width: 16px;
                                border-radius: 8px;
                                background-color: #44bfa3;
                                position: absolute;
                                pointer-events: all;
                                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.32);
                            }

                            .green-audio-player .slider .gap-progress .pin::after {
                                content: "";
                                display: block;
                                background: rgba(0, 0, 0, 0);
                                width: 200%;
                                height: 200%;
                                margin-left: -50%;
                                margin-top: -50%;
                                border-radius: 50%;
                            }
                        </style>

                        <div class="volume">

                            <div class="volume__controls top">
                                <div class="volume__slider slider" data-direction="vertical" tabindex="0">
                                    <div class="volume__progress gap-progress" aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="56.00000000000001" role="slider" style="height: 56%;">
                                        <div class="pin volume__pin" data-method="changeVolume"></div>
                                    </div>
                                    <!-- <span class="message__offscreen">Use Up/Down Arrow keys to increase or decrease volume.</span> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </nav>
</div>

<!-- <script src="./js/bottom.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>