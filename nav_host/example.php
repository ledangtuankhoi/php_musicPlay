<?php
require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");
?>

<?php

// $prods = Product::list_product();

if (!isset($_GET["cateid"])) {
    $songs = Song::list_song();
} else {
    $cateid = $_GET["cateid"];

    $songs = Song::list_song($cateid);
}
$cates = Category::list_category();
?>


<div id="center" class=" my-5">
    <div class="row">
        <div class="col-lg-12">
            <h3 style="color:white; font-weight: bolder;">DANH SÁCH BÀI HÁT</h3>
            <div class="audio-wrapper">

                <audio id="audio">
                    <source src="" id="audioSource" type="audio/mpeg">
                </audio>
            </div>
            <div id="news-slider" class="owl-carousel" style="display: flex;">
                <?php foreach ($songs as $item) { ?>
                    <div id='<?php echo $item["id"] ?>' class='news-grid'>
                        <div class='news-grid-image' style=' height: 150px !important; '>
                            <!-- <i class="fa fa-play"></i> -->
                            <img class="audio-img" src='<?php echo $item["songimg"] ?>'>
                            <div class="hide_img position-absolute top-50 start-50 translate-middle">
                                <i class="fa fa-heart ms-4" style="font-size: 20px;"></i>
                                <a class="aTrigger" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>" data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>">
                                    <i class="fa fa-play ms-4" style="font-size: 20px;"></i>
                                </a>
                                <i class="fa fa-hourglass ms-4 " style="font-size: 20px;" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="news-grid-txt">
                            <p class=" text-while" style="margin-bottom: 0; color:white"><?php echo $item["songname"]; ?></p>
                        </div>
                    </div>

                <?php } ?>



            </div>
        </div>



    </div>