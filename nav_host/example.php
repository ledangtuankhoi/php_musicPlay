<?php
require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");
?>

<?php

// $prods = Product::list_product();


$songs = Song::list_song();
// print_r($songs);

$cates = Category::list_category();
// print_r($cates);

$singer = Song::list_singer_yeu_thich();



// print_r($rock);
// print_r($cates)

// click yeu thích song




// like song voiws ten cua bai hat
if (isset($_REQUEST['songname'])) {
    echo "php ";

    $songname = $_REQUEST['songname'];
    Song::like_song($songname);
}



?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<!-- danh sach nhạc -->
<div style="padding-top: 5px;padding-bottom: 70px;">

    <?php

    if (isset($_GET['songname'])) {
        require_once("./config/db.class.php");
        $songname = $_GET['songname'];
        $db = new Db();
        $sql = "UPDATE tblsongs SET songpoints = songpoints + 1 WHERE songname = '$songname'";
        // $sql = "SELECT * FROM tblsongs";
        $result = $db->query_execute($sql);
    }
    ?>





    <!-- list song -->
    <div class="owl-slider">
        <div class="d-flex justify-content-between">

            <h3 class="">Hôm nay nghe gì :D</h3>
            <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
        </div>


        <div id="carousel" class="list_song owl-carousel">
            <?php foreach ($songs as $item) { ?>
                <div class="item ">
                    <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                        <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                        <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                            <div class="d-flex justify-content-center">
                                <!-- //  click them like theem diem cho song -->
                                <a class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

                                    <i class="fa fa-heart ms-4 float-start" style="font-size: 20px; "></i>
                                </a>
                                <!-- //  click play nhac  -->
                                <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">
                                    <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                                </a>
                                <!-- //  click theem vao danh sach   -->
                                <div class="dropdown">
                                    <a class="" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>

                                    </a>
                                    <style>
                                        .dropdown-menu {
                                            border-radius: 10%;
                                        }
                                    </style>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="#">thêm vào playlist </a></li>
                                        <li><a class="dropdown-item" href="#">tải xuống</a></li>
                                        <li><a class="dropdown-item" href="#">sao chép link</a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="news-grid-txt">
                        <p class=" text-while" style="margin-bottom: 0; color:white"><?php echo $item["songname"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>


    <div class="dropdown">
        <a class="" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>

        </a>
        <style>
            .dropdown-menu {
                border-radius: 10%;
            }
        </style>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">thêm vào playlist </a></li>
            <li><a class="dropdown-item" href="#">tải xuống</a></li>
            <li><a class="dropdown-item" href="#">sao chép link</a></li>

        </ul>
    </div>



    <!-- //  cates -->
    <div class="owl-slider">
        <div class="d-flex justify-content-between">

            <h3 class="">thể loại dành cho bạn</h3>

        </div>


        <div id="carousel" class="list_cates owl-carousel">
            <?php foreach ($cates as $item) { ?>

                <div class="item ">
                    <a href="index.php?cateName=<?php echo $item['catname'] ?>">
                        <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                            <img class="audio-img position-relative" src='./img/<?php echo $item["catimage"] ?>'>

                            <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                <div class="d-flex justify-content-center">
                                    <i class="fa fa-heart ms-4" style="font-size: 50px; "></i>
                                </div>
                            </div>

                        </div>
                    </a>

                    <div class="news-grid-txt">
                        <p class=" text-while" style="margin-bottom: 0; color:white"><?php echo $item["catname"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>




    <style type="text/css">
        .list_cate {
            height: 0px;
            display: none;
        }
    </style>

    <?php
    if (isset($_GET['cateName'])) {

        $cateName = Song::list_song_by_cate($_GET['cateName'])
    ?>
        <style type="text/css">
            .list_cate {
                display: block;
                height: 100%;
                overflow: hidden;
                transition: .4;
            }
        </style>
        <!-- // list cate song click -->
        <div class=" list_cate owl-slider">
            <div class="d-flex justify-content-between">

                <h3 class="">bạn thích cái này! <h2><?php echo $_GET['cateName'] ?></h2>
                </h3>

            </div>


            <div id="carousel" class="list_song_by_cate owl-carousel">
                <?php foreach ($cateName as $item) { ?>
                    <div class="item ">
                        <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                            <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                            <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                <div class="d-flex justify-content-center">
                                    <!-- //  click them like theem diem cho song -->
                                    <a class="like" href="index.php?songname=<?php echo $item["songname"]; ?>" data-audio-name="<?php echo $item["songname"]; ?>">

                                        <i class="fa fa-heart ms-4 float-start" style="font-size: 20px; "></i>
                                    </a>
                                    <!-- //  click play nhac  -->
                                    <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">
                                        <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                                    </a>
                                    <!-- //  click theem vao danh sach   -->
                                    <a href="">
                                        <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <div class="news-grid-txt">
                            <p class=" text-while" style="margin-bottom: 0; color:white"><?php echo $item["songname"]; ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    <?php
        // $_GET[]
        $_GET['cateName'] = '';
    }
    ?>



    <!-- ca si yeu thich -->

    <!-- //  singer -->
    <div class="owl-slider">
        <!-- $singer =  -->
        <div class="d-flex justify-content-between">

            <h3 class="">ca sĩ được yêu thích</h3>


        </div>


        <div id="carousel" class="list_singer owl-carousel">
            <?php foreach ($singer as $item) { ?>
                <div class="item ">
                    <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                        <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                        <div class="hide_nut" style=" position: absolute;bottom: 12%;right: 0%; width: fit-content; ">
                            <div class="d-flex justify-content-center">

                            </div>
                        </div>

                    </div>

                    <div class="news-grid-txt" style="">
                        <div style="float: left; position: relative;">
                            <p class=" text-while" style="margin-bottom: 0; color:white; "><?php echo $item["songsinger"]; ?></p>
                        </div>
                        <span style="float:right; position: absolute; bottom:0; right: 0px;" class="text-primary"><?php echo $item["songpoints"]; ?></span>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>