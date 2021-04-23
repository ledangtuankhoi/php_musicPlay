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

    
    <style>
        .big {
            background: #ac0000 !important;
            height: 130%;
        }

        .medium {
            background: #dd0000 !important;
        }
    </style>

    <div id="demos">
        <div class="loop owl-carousel">
            <div class="item">
                <h4>1</h4>
            </div>
            <div class="item">
                <h4>2</h4>
            </div>
            <div class="item">
                <h4>3</h4>
            </div>
            <div class="item">
                <h4>4</h4>
            </div>
            <div class="item">
                <h4>5</h4>
            </div>
            <div class="item">
                <h4>6</h4>
            </div>
            <div class="item">
                <h4>7</h4>
            </div>
            <div class="item">
                <h4>8</h4>
            </div>
            <div class="item">
                <h4>9</h4>
            </div>
            <div class="item">
                <h4>10</h4>
            </div>
            <div class="item">
                <h4>11</h4>
            </div>
            <div class="item">
                <h4>12</h4>
            </div>
        </div>
    </div>
 
    <script>
        $(function() {
            $('.loop').on('translate.owl.carousel', function(e) {
                idx = e.item.index;
                console.log(idx);
                
                $('.owl-item.big').remove('big');
                $('.owl-item.medium').remove('medium');
                $('.owl-item').eq(idx - 1).addClass('medium');
                console.log($('.owl-item').eq(idx));
                $('.owl-item').eq(idx).addClass('big');
                $('.owl-item').eq(idx + 1).addClass('medium');
            });
            


            $('.loop').owlCarousel({
                center: true,
                items: 5,
                loop: true,
                margin: 10,
                // autoplay: true,
                autoplayTimeout: 1000,
                nav: true,
            })
            // console.log(initialized.owl.carousel);



            
        });
    </script>