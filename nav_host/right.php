<?php
// session_destroy();

require_once("./Entities/song.class.php");
$list_song_goiy = Song::list_song();
// var_dump($list_song);




require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");

$id = isset($_GET['id']) ? $_GET['id'] : "";
$songs = Song::song_by_id($id);
if ($songs) {

    if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['cart'][$id])) {
            // $_SESSION['cart'][$id]['soluong'] += 1;
            // var_dump('da ton tai ! them so luong');
        } else {
            // $_SESSION['cart'][$id]['soluong'] = 1;
            $_SESSION['cart'][$id] = Song::song_by_id($id);

            // var_dump('da ton tai ! them mới');
            // header("location:/php_musicPlay/"); 
        }
    } else {
        // var_dump("chua co");
        // $_SESSION['cart'][$id]['soluong'] = 1;
        $_SESSION['cart'][$id] = Song::song_by_id($id);
        // var_dump("da them");
        // header("location:/php_musicPlay/");exit(); 

    }
}












// // echo "<br/>";
// if (isset($_SESSION['cart'])) {
//     // foreach ($_SESSION['cart'] as $item) {
//     // echo " mangr var_dump <pre  />";
//     // var_dump($_SESSION['cart']);
//     // var_dump(print_r($_SESSION['cart']['songname']));
//     // print_r($_SESSION['cart']['songname']);
//     // var_dump($item['id']);
//     // }
//     // echo "<br/>";

//     foreach ($_SESSION['cart'] as $item) {
//         // echo "lopw 1<br/>";
//         foreach ($item as $item2) {
//             // echo "lopw 2 <br/>";

//             print_r($item2['id']);
//             print_r($item2['songname']);
//         }
//     }
// }


?>

<div id="right" class="transform p-3 bg_color " style="">

    <?php


    ?>
    <div class="chucnang d-flex justify-content-between" style="">

        <div class="tab d-flex justify-content-between border rounded-pill " style=" width: 198px;height: 100%;">

            <a class="active ms-1 btn text-white rounded-pill" href="#" role="button">playlist</a>
            <a class=" ms-1 btn text-white rounded-pill" href="#" role="button">nghe gần đây</a>

        </div>
        <div class="them">
            <i class="fa fa-stopwatch-20 fs-3"></i>
            <i class="fa fa-hourglass fs-3"></i>
        </div>

    </div>
    <?php

    ?>
    <div class="Playlist" style="height: 80%; overflow:hidden; ">
        <div id="scroll_right">
            <div class="playlist_luu">
                <ul class="my-2 p-0">
                    <div class="me-2">
                        <span>playlist</span>
                    </div>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $item) {
                            // echo "lopw 1<br/>";
                            foreach ($item as $item2) {
                    ?>


                                <li class="d-flex my-2 " style="">
                                    <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item2["songfile"] ?>" data-audio-name="<?php echo $item2["songname"]; ?>" data-audio-singer="<?php echo $item2["songsinger"] ?>" data-audio-img="<?php echo $item2["songimg"] ?>">

                                        <img src="<?php echo $item2['songimg'] ?>" width="50" height="50" alt="">
                                    </a>
                                    <div class="ms-2">
                                        <p class="fw-bold" style=" "><?php echo $item2['songname'] ?></p>
                                        <p><?php echo $item2['songsinger'] ?></p>
                                    </div>
                                </li>
                    <?php

                            }
                        }
                    }
                    ?>


                </ul>
            </div>
            <div style="background: grey;">

                <br>

            </div>
            <div class="goiy">
                <ul class="my-2 p-0">
                    <div class="me-2">
                        <span>gợi ý cho bạn</span>
                    </div>
                    <?php
                    foreach ($list_song_goiy as $item) {
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



                </ul>
            </div>

        </div>
    </div>

</div>