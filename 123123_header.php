<?php
require_once("./config/db.class.php");
// session_start();


if (!isset($_SESSION)) {
    session_start();
}





?>
<link rel="stylesheet" href="./css/style.css">
<div class=" bg" id="header">
    <nav class="navbar fixed-top  navbar-expand-lg bg ">
        <!-- <div class="container-fluid"> -->
        <div class="navbar-brand">
            <a class="" href="#" style="text-transform: uppercase; font-weight: bolder;">live live</a>
            <img src="./img/upload/image.png" class="text-decoration-none" style="width: 23px;" alt="">

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex jus">
                <li class="nav-item">
                    <input class=" border rounded-pill " type="search" placeholder="tên ca sĩ hoặc bài nhạc...." aria-label="Search">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                </li>
                <li class="nav-item" style=" width: 40px; height: 40px;">
                <i class="fas fa-search m-auto h-100"></i>
                </li>
            </ul>
            <form  >
                <div class="d-flex  " >
                    <!-- <a href="#" class="link-dark text-decoration-none" aria-expanded="false"> -->
                    <a href="#" >
                        <div class="me-2 ms-1 rounded-circle border border-primary"" width="40px" >
                            <!-- <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle "> -->
                            <i class="fas fa-cog" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                        </div>
                    </a>
                    <a href="#" >
                        <div class="me-2 ms-1 rounded-circle border border-success" width="40px" >
                            <!-- <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle "> -->
                            <i class="fas fa-upload" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="me-2 ms-1">
                            <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle ">
                        </div>
                    </a>
                    <!-- <div class=" p-2 dropdown">
                     

                        <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                       
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">my home</a></li>
                            <li><a class="dropdown-item" href="#">SETING </a></li>
                            <li><a class="dropdown-item" href="#">logOUT</a></li>
                        </ul>
                    </div> -->



                    <!-- </a> -->
                </div>
            </form>
        </div>
        <!-- </div> -->
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>