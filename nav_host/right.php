<?php
require_once("./Entities/song.class.php");
$list_song = Song::list_song();
// var_dump($list_song);

?>

<style>
    #right>div:nth-child(2)>ul {
        margin-left: 0 !important;
    }

    li {
        list-style: none;
    }

    #right {
        justify-content: flex-end;


        position: fixed;
        top: 0;
        right: 0;
        width: 279px;
        height: 100%;
        margin: 60px 0;
    }

    #right .chucnang .tab  .active{
        border: 1px solid white;
        border-radius: 50rem;
        background-color: rgb(113, 129, 151, 0.8);

    }

    #right .chucnang .tab ul {
        padding-left: 0 !important;
    }

    #right .chucnang .tab ul li {
        margin-top: 1rem;
    }

    #right .Playlist ul li p {
        white-space: nowrap;
        width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;

    }

    #scroll_right {
        height: 100%;
        /* border: 2px red solid; */
        overflow-y: scroll;
        overflow-x: hidden;
    }

    #scroll_right::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #2255c1;
    }

    #scroll_right::-webkit-scrollbar {
        width: 6px;
        border-radius: 10px;
        background-color: #f5f5f5;
    }
</style>

<div id="right" class=" p-3 bg_color " style="">

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