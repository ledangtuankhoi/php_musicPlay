<?php
require_once("./Entities/song.class.php");
$list_song = Song::list_song();
// var_dump($list_song);

?>

<div id="right" class="transform p-3 bg_color " style="">

    <div class="chucnang d-flex justify-content-between" style="">

        <div class="tab d-flex justify-content-between border rounded-pill " style=" width: 198px;height: 100%;">

            <a class="active ms-1 btn text-white rounded-pill" style="font-size:10px; margin:0 !important" href="#" role="button">danh sach nhạc</a>
            <a class=" ms-1 btn text-white rounded-pill" style="font-size:10px; margin:0 !important" href="#" role="button">danh sach nhạc</a>

        </div>
        <div class="them">
            <i class="fa fa-stopwatch-20 fs-3"></i>
            <i class="fa fa-hourglass fs-3"></i>
        </div>

    </div>
    <div class="me-2">
        <span>asdfasfasdfa</span>
    </div>
    <div class="Playlist" style="height: 80%; overflow:hidden; ">
        <div id="scroll_right">

            <ul class="my-2 p-0">

                <?php
                foreach ($list_song as $item) {
                    // echo ($item['songsinger'])
                ?>


                    <li class="d-flex my-2 " style="">
                        <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">

                            <img src="<?php echo $item['songimg'] ?>" width="50" height="50" alt="">
                        </a>
                        <div class="ms-2">
                            <p class="fw-bold" style=" "><?php echo $item['songname'] ?></p>
                            <p><?php echo $item['songsinger'] ?></p>
                        </div>
                    </li>
                <?php
                }
                ?>


                <li class="d-flex my-2 ">
                    <img src="./img/img_ (14).jpg" width="50" height="50" alt="">
                    <div>
                        <p>namesong</p>
                        <p>name singer</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>