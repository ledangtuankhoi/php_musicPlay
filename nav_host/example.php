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

$ROCK = Song::list_song_by_cate("ROCK");
$RAP = Song::list_song_by_cate("RAP");
$ALTERNATIVE = Song::list_song_by_cate("ALTERNATIVE");
$HIPHOP = Song::list_song_by_cate("HIPHOP");
$RNB  = Song::list_song_by_cate("RNB ");
$ACOUSTIC  = Song::list_song_by_cate("ACOUSTIC ");
$OPM  = Song::list_song_by_cate("OPM ");
$RAP = Song::list_song_by_cate("RAP");

// print_r($rock);
// print_r($cates)
?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<!-- danh sach nhạc -->
<div style="padding-top: 5px;padding-bottom: 70px;">

<?php

    if(isset($_GET['songname'])){
        require_once("./config/db.class.php");
        $songname = $_GET['songname'];
        $db = new Db();
        $sql = "UPDATE tblsongs SET songpoints = songpoints + 1 WHERE songname = '$songname'";
        // $sql = "SELECT * FROM tblsongs";
        $result = $db->query_execute($sql);
        
    }
?>

    <div class="owl-slider">
        <div class="d-flex justify-content-between">

            <h3 class="">Hôm nay nghe gì :D</h3>
            <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>


        <div id="carousel" class="list_song owl-carousel">
            <?php foreach ($songs as $item) { ?>
                <div class="item ">
                    <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                        <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                        <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                            <div class="d-flex justify-content-center">
                                <!-- //  click them like theem diem cho song -->
                                <a class="like" href="index.php?songname=<?php echo $item["songname"]; ?>" data-audio-name="<?php echo $item["songname"]; ?>" >
                                
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





    <!-- //  cates -->
    <div class="owl-slider">
        <div class="d-flex justify-content-between">

            <h3 class="">thể loại dành cho bạn</h3>
            <div>
                <button class="btn back_cates "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cates "><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>


        <div id="carousel" class="list_cates owl-carousel">
            <?php foreach ($cates as $item) { ?>
                <div class="item ">
                    <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                        <img class="audio-img position-relative" src='./img/<?php echo $item["catimage"] ?>'>

                        <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-heart ms-4 float-start" style="font-size: 20px; "></i>
                                <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                                <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>

                            </div>
                        </div>

                    </div>

                    <div class="news-grid-txt">
                        <p class=" text-while" style="margin-bottom: 0; color:white"><?php echo $item["catname"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>