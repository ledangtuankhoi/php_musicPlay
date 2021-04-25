<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./img/img_ (12).png" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/left.css">
    <link rel="stylesheet" href="./css/bottom.css">
    <link rel="stylesheet" href="./css/Carousel.css">
    <link rel="stylesheet" href="./css/right.css">


    <title>simple music play</title>
</head>

<body>
    <div class="container-fluid">


        <audio id="audio">
            <source src="" id="audioSource" type="audio/mpeg">
        </audio>
        <?php include_once("./nav_host/header.php") ?>
        <?php include_once("./nav_host/left.php") ?>
        <?php include_once("./nav_host/bottom_copy.php") ?>
        <?php include_once("./nav_host/right.php") ?>



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
            $ALTERNATIVE = Song::list_song_by_cate("ALTERNATIV");
            // print_r($ALTERNATIVE);
            $HIPHOP = Song::list_song_by_cate("HIPHOP");
            $RNB  = Song::list_song_by_cate("RNB ");
            $ACOUSTIC  = Song::list_song_by_cate("ACOUSTIC");
            $OPM  = Song::list_song_by_cate("OPM ");

            ?>
            <!-- danh sách theo loại -->
            <!-- danh sách theo rock -->

            <!-- list song -->
            <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $ROCK[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($ROCK as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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


            <!-- list song -->
            <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $RAP[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($RAP as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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





            <!-- list song -->
            <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $ALTERNATIVE[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($ALTERNATIVE as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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



            <!-- list song -->
            <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $HIPHOP[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($HIPHOP as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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



            <!-- list song -->
            <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $RNB[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($RNB as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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



                <!-- list song -->
                <div class="owl-slider">
                    <div class="d-flex justify-content-between">

                        <h3 class=""><?php echo $OPM[0]["songcat"]; ?></h3>
                        <!-- <div>
                    <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                    <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
                </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($OPM as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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
                       <!-- list song -->
                       <div class="owl-slider">
                <div class="d-flex justify-content-between">

                    <h3 class=""><?php echo $ACOUSTIC[0]["songcat"]; ?></h3>
                    <!-- <div>
                <button class="btn back "><i class="fas fa-arrow-circle-left"></i></button>
                <button class="btn next "><i class="fas fa-arrow-circle-right"></i></button>
            </div> -->
                </div>


                <div id="carousel" class="list_song owl-carousel">
                    <?php foreach ($ACOUSTIC as $item) { ?>
                        <div class="item ">
                            <div class='news-grid-image rounded-3' style=' height: 150px !important; '>
                                <img class="audio-img position-relative" src='<?php echo $item["songimg"] ?>'>

                                <div class="hide_nut" style=" position: absolute;top: 40%;left: 40%;right: 50%;">
                                    <div class="d-flex justify-content-center">
                                        <!-- //  click them like theem diem cho song -->
                                        <a href="" class="like" onclick="like_song('<?php echo $item['songname']; ?>');">

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
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href=" ?action=add_list&id=<?php echo $item['id'] ?>">thêm vào playlist </a></li>
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










        </div>
</body>

</html>


<script src="./js/header.js"></script>
<script src="./js/sidebars.js"></script>
<script src="./js/controlmusicPlay.js"></script>
<script src="./js/carousel.js"></script>
<script src="./js/like_song.js"></script>