<?php
require_once("./config/db.class.php");
require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");

$songs = Song::list_song();

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['user'])) {
    require_once("./Entities/user.class.php");


    $user = User::login($_SESSION['user']);

    $username = $user[0]["name"];
    $userimg = $user[0]["userImg"];
} else {

    header('location:login.php');
}



?>



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/left.css">
    <link rel="stylesheet" href="./css/bottom.css">
    <link rel="stylesheet" href="./css/Carousel.css">


    <title>simple music play</title>
</head>

<body>
    <div class="container-fluid">

        <style>
            .scroll {
                height: 690px;
                /* border: 2px red solid; */
                overflow-y: scroll;
            }

            .scroll::-webkit-scrollbar {
                width: 6px;
                border-radius: 10px;
                background-color: #f5f5f5;
            }

            * {
                /* width: 70px !important; */
                transition: 0.5s;
            }

            .scroll::-webkit-scrollbar-thumb {
                border-radius: 10px;
                background-color: #2255c1;
            }
        </style>
        <audio id="audio">
            <source src="" id="audioSource" type="audio/mpeg">
        </audio>
        <?php include_once("./nav_host/header.php") ?>
        <?php include_once("./nav_host/left.php") ?>




        <div id="person" style="overflow: hidden;">
            <div class="row h-100">
                <div class="col-lg-8 ">

                    <!-- // hàm edit song -->
                    <!-- // ?action=edit_song&id= echo $item['id']  -->
                    <?php
                    if ($_GET['action'] = 'edit_song' && isset($_GET['id'])) {
                        $Song_id = $_GET['id'];
                        include_once("./edit_song.php");
                    }
                    ?>



                    <table class="table scroll">
                        <thead>
                            <tr>
                                <th scope="col">@</th>
                                <th scope="col">#</th>
                                <th scope="col">songname</th>
                                <th scope="col">songcat</th>
                                <th scope="col">songalbum</th>
                                <th scope="col">songsinger</th>
                                <th scope="col">songdesc</th>
                                <th scope="col">songfile</th>
                                <th scope="col">songwriter</th>
                                <th scope="col">songpoints</th>
                                <th scope="col">songimg</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($songs as $item) {

                            ?>
                                <div>

                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    fun
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="?action=edit_song&id=<?php echo $item['id'] ?>">
                                                            <!-- <i class="fa fa-battery-2 fs-2" ></i> -->
                                                            sửa
                                                        </a></li>
                                                    <li><a class="dropdown-item" href="#">xóa</a></li>
                                                    <li><a class="dropdown-item" href="#">fun</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">fun</a></li>
                                                </ul>
                                            </div>

                                        </th>
                                        <th scope="row"><?php echo $i += 1 ?></th>
                                        <td scope="col"><?php echo $item['songname'] ?></td>
                                        <td scope="col"><?php echo $item['songcat'] ?></td>
                                        <td scope="col"><?php echo $item['songalbum'] ?></td>
                                        <td scope="col"><?php echo $item['songsinger'] ?></td>
                                        <td scope="col"><?php echo $item['songdesc'] ?></td>
                                        <td scope="col"><?php echo $item['songfile'] ?></td>
                                        <td scope="col"><?php echo $item['songwriter'] ?></td>
                                        <td scope="col"><?php echo $item['songpoints'] ?></td>
                                        <td scope="col"><?php echo $item['songimg'] ?></td>

                                    </tr>




                                </div>

                            <?php

                            }

                            ?>


                        </tbody>
                    </table>
                </div>
                <style>

                </style>
                <div class="info col-lg-4  text-center">

                    <img class="rounded-circle  " style="height: 200px; width: 200px" src="./img/<?php echo $userimg ?>" alt="">

                    <div class="text-center m-2">
                        <h3><?php echo $username ?></h3>
                    </div>

                    <ul class="list-group bg-transparent border  ">
                        <li class="text-while bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                anblum
                            </a>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                bài hát
                            </a>
                            <span class="badge bg-primary rounded-pill">21</span>
                        </li>
                        <li class="bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                playlist
                            </a>
                            <span class="badge bg-primary rounded-pill">81</span>
                        </li>
                        <li class=" bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                nghệ sĩ
                            </a>
                            <span class="badge bg-primary rounded-pill">61</span>
                        </li>
                        <li class="bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                MV
                            </a>
                            <span class="badge bg-primary rounded-pill">11</span>
                        </li>
                        <li class="bg-transparent list-group-item d-flex justify-content-between align-items-center">
                            <a href="./logout.php">

                                đăng xuất
                            </a>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>




    </div>
</body>

</html>


<script src="./js/header.js"></script>
<script src="./js/sidebars.js"></script>
<script src="./js/controlmusicPlay.js"></script>
<script src="./js/carousel.js"></script>


<!-- <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->