<div id="bottom">
    <link rel="stylesheet" href="./css/style.css">
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
                    <div class="controls">
                        <span id="durationUpdate">0:00</span>
                        <!-- <div class="controls__slider slider" data-direction="horizontal">
                            <div class="controls__progress progress">
                                <div class="pin progress__pin" data-method="rewind"></div>
                            </div>
                        </div> -->
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
                        <div id="seekObjContainer" class="clearfix">
                            <div id="timeline1">
                                <div id="seekObj1" class="playhead" style="margin-left: 0px;"></div>
                            </div>
                        </div>
                        <span id="duration">3:00</span>
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
                            .hidden {
                                display: none;
                            }

                            .volume {
                                position: relative;
                            }

                            .volume .volume-controls {
                                width: 135px;
                                height: 10px;
                                background-color: #b4b0b0;
                                border-radius: 7px;
                                position: absolute;
                                left: 35px;
                                bottom: 8px;
                                flex-direction: column;
                                align-items: center;
                                display: flex;
                            }

                            .volume .volume-controls .slider {
                                margin-top: 12px;
                                margin-bottom: 12px;
                                width: 6px;
                                border-radius: 3px;
                            }

                            .volume .volume-controls .slider .progress {
                                position: absolute;
                                bottom: 0px;
                                left: 0;
                                height: 10px;
                                width: 91px;
                                border-radius: 0 10% 10% 0;
                                background-color: white;

                            }
                        </style>
                        <div class="volume-controls ">
                            <div class="slider" data-direction="vertical">
                                <div class="progress">
                                    <div class="pin" id="volume-pin" data-method="changeVolume"></div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function getCoefficient(event) {
                                let slider = getRangeBox(event);
                                let rect = slider.getBoundingClientRect();
                                let K = 0;
                                if (slider.dataset.direction == 'horizontal') {

                                    let offsetX = event.clientX - slider.offsetLeft;
                                    let width = slider.clientWidth;
                                    K = offsetX / width;

                                } else if (slider.dataset.direction == 'vertical') {

                                    let height = slider.clientHeight;
                                    var offsetY = event.clientY - rect.top;
                                    K = 1 - offsetY / height;

                                }
                                return K;
                            }

                            function inRange(event) {
                                let rangeBox = getRangeBox(event);
                                let rect = rangeBox.getBoundingClientRect();
                                let direction = rangeBox.dataset.direction;
                                if (direction == 'horizontal') {
                                    var min = rangeBox.offsetLeft;
                                    var max = min + rangeBox.offsetWidth;
                                    if (event.clientX < min || event.clientX > max) return false;
                                } else {
                                    var min = rect.top;
                                    var max = min + rangeBox.offsetHeight;
                                    if (event.clientY < min || event.clientY > max) return false;
                                }
                                return true;
                            }

                            function changeVolume(event) {
                                if (inRange(event)) {
                                    player.volume = getCoefficient(event);
                                }
                            }
                        </script>
                    </div>

                </div>

            </div>
        </div>
    </nav>
</div>