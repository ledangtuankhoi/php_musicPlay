

<link href="./css/carousel.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />

<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<?php
require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");
?>

<?php
include_once("header.php");
// $prods = Product::list_product();

if (!isset($_GET["cateid"])) {
    $songs = Song::list_song();
} else {
    $cateid = $_GET["cateid"];

    $songs = Song::list_song($cateid);
}
$cates = Category::list_category();
?>

<body>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-12">
                <h3>DANH SÁCH BÀI HÁT</h3>
                <div class="audio-wrapper">

                    <audio id="audio">
                        <source src="" id="audioSource" type="audio/mpeg">
                    </audio>
                </div>
                <div id="news-slider" class="owl-carousel">
                    <?php foreach ($songs as $item) { ?>
                        <div id='<?php echo $item["id"] ?>' class='news-grid'>
                            <div class='news-grid-image' style=' height: 150px !important;'>
                                <!-- <i class="fa fa-play"></i> -->
                                <img class="audio-img" src='<?php echo $item["songimg"] ?>'>
                                <span> <?php echo print_r($item) ?></span>
                                <!-- <style>
                                    .hide{
                                        display: none;
                                    }
                                </style> -->
                                <div class="position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center">
                                    <i class="fa fa-heart ms-4" style="font-size: 20px;"></i>
                                    <a class="aTrigger play-pause" data-active="" data-audio="./audio/<?php echo $item["songfile"] ?>" data-audio-name="<?php echo $item["songname"]; ?>"  data-audio-singer="<?php echo $item["songsinger"] ?>" data-audio-img="<?php echo $item["songimg"] ?>" >
                                        <i class="fa fa-play ms-4" style="font-size: 40px;"></i>
                                       
                                    </a>
                                    <i class ="fa fa-ellipsis-h ms-4" style="font-size: 20px;" ></i>
                                </div>

                            </div>
                            <div class="news-grid-txt">
                                <p  class=" text-while" style="margin-bottom: 0;"><?php echo $item["songname"]; ?></p>

                            </div>
                        </div>
                    <?php } ?>



                </div>
            </div>



        </div>



        <script type="text/javascript" src="./js/carousel.js"></script>
        <script src="./js/controlmusicPlay.js"></script>
        <!-- <script src="./js/bottom.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- <script src="./js/controlmusic1.js" defer></script> -->
</body>

</html>