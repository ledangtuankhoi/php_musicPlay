<?php
require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");
?>

<?php

// $prods = Product::list_product();


$songs = Song::list_song();


$cates = Category::list_category();
// print_r($cates)
?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<!-- danh sach nhạc -->

<div class="owl-slider">
    <div class="d-flex justify-content-between">

        <h2 class="">Hôm nay nghe gì :D</h2>
        <div>
            <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
            <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
        </div>
    </div>
    <audio id="audio">
        <source src="" id="audioSource" type="audio/mpeg">
    </audio>

    <div id="carousel" class="list_song owl-carousel">
        <?php foreach ($songs as $item) { ?>
            <div class="item ">
                <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                    <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                    <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-heart ms-4 float-start" style="font-size: 20px; "></i>
                            <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">
                                <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                            </a>
                            <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>

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


<!-- danh sách theo loại -->
<div class="silder">
    <div class="d-flex justify-content-between">

        <h2 class=""></h2>
        <div>
            <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
            <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
        </div>
    </div>

    <div id="carousel" class="list_cate owl-carousel">
        <?php foreach ($songs as $item) { ?>
            <div class="item">
                <!-- <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt=""> -->
                <div class='news-grid-image' style=' height: 150px !important; '>
                    <!-- <i class="fa fa-play"></i> -->
                    <img class="audio-img position-relative rounded-3" src='<?php echo $item["songimg"] ?>'>

                    <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-heart ms-4 float-start" style="font-size: 20px; "></i>
                            <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">
                                <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                            </a>
                            <!-- <i class="fa fa-hourglass ms-4 "  aria-hidden="true"></i> -->
                            <i class="fas fa-ellipsis-h ms-4" style="font-size: 20px;"></i>

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

<script>

</script>