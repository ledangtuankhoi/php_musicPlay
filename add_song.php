<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" /> -->


    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/left.css">
    <link rel="stylesheet" href="./css/bottom.css">
    <link rel="stylesheet" href="./css/Carousel.css">


    <title>simple music play</title>
</head>


<body>

    <?php

    // require_once("./config/db.class.php");
    require_once("./Entities/category.class.php");
    require_once("./Entities/song.class.php");

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['user'])) {
        require_once("./Entities/user.class.php");


        $user = User::login($_SESSION['user']);

        $username = $user[0]["name"];
        $userimg = $user[0]["userImg"];
    } else {

        // include_once("login.php");
        header("Location: login.php");
    }

    if (isset($_POST["btnsubmit"])) {


        $song_name = $_POST["txtName"];
        $song_cat = $_POST["txtcate"];
        $song_singer = $_POST["txtsinger"];
        $song_desc = $_POST["txtdesc"];
        $song_file = $_FILES["txtfile"];
        $song_writer = $_POST["txtwriter"];
        $song_img = $_FILES["txtpic"];

        echo "song_name=  ";
        echo   $song_name;
        echo "song_cat=  ";
        echo  $song_cat;
        echo "song_singer=  ";
        echo  $song_singer;
        echo "song_desc=  ";
        echo  $song_desc;
        // echo "song_file=  ";
        // echo  $song_file;
        echo "song_writer=  ";
        echo  $song_writer;
        // echo "song_img=  ";
        // echo  $song_img;  



        //TODO khởi tạo đối tượng product
        $newSong = new Song($song_name, $song_cat,  $song_singer, $song_desc, $song_file, $song_writer, $song_img);
        //TODO lưu xuống csdl
        $result = $newSong->save();
        echo "kq $result";
        if (!$result) {
            //TODO truy vấn lỗi

            header("Location: add_song.php?failure");
        } else {
            header("Location: add_song.php?inserted");
        }
    }


    ?>





    <?php include_once("./nav_host/header.php") ?>
    <?php include_once("./nav_host/left.php") ?>
    <?php include_once("./nav_host/bottom_copy.php") ?>

    <div class="container-fluid">

        <div id="center " class=" " style="; padding-bottom: 70px; ">
            <?php
            if (isset($_GET["inserted"])) {
                echo "<h2 class=' rounded d-inline-flex' style=' background-color: #00be00;'>Thêm sản phẩm thành công </h2";
            }
            if (isset($_GET["failure"])) echo "<h2 class='bg-danger rounded d-inline-flex  ' style='border: 40px'> LỖI </h2";
            ?>


            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} ">
                <div class="col col-6">

                    <form class=" g-3 needs-validation" method="POST" enctype="multipart/form-data" style="text-transform: initial !important;">

                        <div class="">
                            <label for="txtname" class="form-label">tên bài hát</label>
                            <input type="text" class="form-control" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName "] : ""; ?>">
                            <!-- <div class="invalid-feedback">
                            Please provide
                        </div> -->
                        </div>
                        <div class="">
                            <label for="txtsinger" class="form-label">tên ca sĩ</label>
                            <input type="text" class="form-control" name="txtsinger" value="<?php echo isset($_POST["txtsinger"]) ? $_POST["txtsinger"] : ""; ?>">
                            <!-- <div class="invalid-feedback">
                        Please provide
                    </div> -->
                        </div>
                        <div class="">
                            <label for="txtwriter" class="form-label">người sáng tác</label>
                            <input type="text" class="form-control" name="txtwriter" value="<?php echo isset($_POST["txtwriter"]) ? $_POST["txtwriter"] : ""; ?>">
                            <!-- <div class="invalid-feedback">
                        Please provide
                    </div> -->
                        </div>
                        <div class="">
                            <label class="form-label">thể loại bài hát</label>
                            <select name="txtcate" class="form-select">
                                <option>--Chọn Loại--</option>
                                <?php
                                $cates = Category::list_category();
                                foreach ($cates as $item) {
                                    echo "<option style='color:black;' value=" . $item["catname"] . ">" . $item["catname"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="">
                            <label for="txtdesc" class="form-label">mô tả bài nhạc</label>
                            <textarea class="form-control" name="txtdesc" rows="3" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">hình</label>
                            <input class="form-control" type="file" id="formFile" name="txtpic" accept=".PNG,.GIF,.JPG">
                            <!-- <input type="file" id="txtpic" name="txtpic" accept=".PNG,.GIF,.JPG" onchange="loadFile(event)"> -->
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">đường dẫn file audio</label>
                            <input class="form-control" type="file" accept="audio/*" id="txtfile" name="txtfile">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="btnsubmit">Submit form</button>
                        </div>
                    </form>
                </div>
                <div class="col col-6 ">
                    <p>review</p>
                    <div class="">

                        <!-- <img style="float: right;" id="output" class="border border-primar img-thumbnail " />
                        <audio style="float: right;" id="audio" controls>
                            <source src="" id="src" />
                        </audio> -->
                    </div>


                </div>
            </div>


        </div>
        <script>

        </script>




    </div>
</body>



</html>



<script src="./js/header.js"></script>
<script src="./js/sidebars.js"></script>
<script src="./js/controlmusicPlay.js"></script>
<script src="./js/carousel.js"></script>