<?php
require_once("./config/db.class.php");


if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['user'])) {
    require_once("./Entities/user.class.php");


    $user = User::login($_SESSION['user']);

    $username = $user[0]["name"];
    $userimg = $user[0]["userImg"];

} else {

    $userimg = "upload/chamhoi.png";


}


?>
<!-- <link   rel="stylesheet" href="./css/style.css"> -->
<div class="bg_color  " id="header">
    <nav class="">
        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-lg-7">
                <form class="d-flex justify-content-center align-items-center">
                    <input class="form-control me-2 rounded-pill bg-body border " type="search" placeholder="Search" aria-label="Search">

                    <div>
                        <i class="fa fa-search fs-3" aria-hidden="true"></i>
                    </div>
                </form>

            </div>
            <div class="col-lg-5 d-flex justify-content-end">
                <form>
                    <div class="d-flex  ">
                        <div class="dropdown">
                            <a href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="me-2 ms-1 rounded-circle border border-primary" width=" 40px">
                                    <!-- <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle "> -->
                                    <i class="fas fa-cog" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Playlist</a></li>
                                <li><a class="dropdown-item" href="#">Like</a></li>
                                <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                            </ul>
                        </div>

                        <!-- <a href="#" class="link-dark text-decoration-none" aria-expanded="false"> -->

                        <a href="add_song.php">
                            <div class="me-2 ms-1  rounded-circle border border-success" width="40px">
                                <i class="fas fa-upload" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                            </div>
                        </a>
                        <a href="personal.php">
                            <div class="me-2 ms-1 " >
                                <img id="img_acc" src="./img/<?php echo $userimg ?>" width="40" height="40" class="  border border-white rounded-circle ">
                            </div>
                        </a>

                    </div>
                </form>
            </div>



        </div>

    </nav>
</div>
<script>
    function img_acc() {
        document.getElementById("img_acc").setAttribute("src", "./img/upload/chamhoi.png")
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>