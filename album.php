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



    <!-- // anblm -->
    <style>
        #mix {
            width: 200px
        }

        #mix .row {
            padding: 0 !important;
            --bs-gutter-x: 0;
            --bs-gutter-y: 0;
        }

        #mix .row .well img {
            /* height: 65px; */
            width: 100%;
            object-fit: cover;
        }

        #mix .row .well .highlights {
            height: 65px;
            padding: 2px 2px;
            object-fit: cover;
        }
    </style>

    <div class="row">
        <div class="col-md-4">
            <div id="mix">

                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class=" highlights img-fluid " src="./img/img_ (99).jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="<?php echo isset($sdf) ? $sdf : "./img/img_ (99).jpg" ?>" alt="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="mix">

                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <!-- //  chua hinh album -->
                            <img class=" highlights img-fluid " src="./img/img_ (99).jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well">
                                    <!-- chua hinh song -->
                                    <img class="img-fluid" src="<?php echo isset($sdf) ? $sdf : "./img/img_ (99).jpg" ?>" alt="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well">
                                    <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="img-fluid" src="./img/img_ (98).jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    for ($x = 0; $x <= 4; $x++) {
        echo " $x <br>";
    }


    require_once("./Entities/album.class.php");
    require_once("./config/db.class.php");



    

    $li_album = Album::list_album();

    $cout_album = 27;
    foreach ($li_album as $item) {

        $cout_album = $cout_album + 1;

        $db = new Db();
        $sql = "SELECT * FROM tblsongs WHERE songcat = (SELECT catname FROM tblcategory WHERE id= ' $cout_album')";
        $result = $db->select_to_array($sql);

        echo "<br/>";
        // xuat ten cua the loai cua album
        $name_cate =  Category::list_category_input_id_outName($cout_album);
        print_r($name_cate[0]['catname']);



        $ites = 0;
        foreach ($result as $item2) {
            echo  "<br/>";
            // echo $item2['songcat'];
            $ites = $ites + 1;
            echo "<br/>$ites";
            print_r($item2);
    ?>

            <script>
                document.getElementById("img_")
            </script>



    <?php

        }
    }


    ?>




</div>