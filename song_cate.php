<div id="song_cate" style="padding-bottom: 70px;">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



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

    ?>
    <!-- danh sách theo loại -->
    <!-- danh sách theo rock -->

    


    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $ROCK[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_ROCK owl-carousel">
            <?php foreach ($ROCK as $item) { ?>
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



    <!-- danh sách theo RAP -->
    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $RAP[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_RAP owl-carousel">
            <?php foreach ($RAP as $item) { ?>
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



    <!-- danh sách theo HIPHOP -->
    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $HIPHOP[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_HIPHOP owl-carousel">
            <?php foreach ($HIPHOP as $item) { ?>
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
    <!--  HIPHOP end -->


    <!-- danh sách theo OPM -->
    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $OPM[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_OPM owl-carousel">
            <?php foreach ($OPM as $item) { ?>
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
    <!--  HIPHOP end -->


    <!-- danh sách theo RNB -->
    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $RNB[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_RNB owl-carousel">
            <?php foreach ($RNB as $item) { ?>
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
    <!--  HIPHOP end -->



    <!-- danh sách theo ACOUSTIC -->
    <div class="silder me-4">
        <div class="d-flex justify-content-between">

            <h3 class=""><?php echo $ACOUSTIC[0]["songcat"]; ?></h3>
            <div>
                <button class="btn back_cate"><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next_cate"><i class="fas fa-arrow-circle-right"></i></button>
            </div>
        </div>

        <div id="carousel" class="list_ACOUSTIC owl-carousel">
            <?php foreach ($ACOUSTIC as $item) { ?>
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
    <!--  HIPHOP end -->

</div>