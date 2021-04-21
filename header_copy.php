<?php
require_once("./config/db.class.php");
// session_start();


if (!isset($_SESSION)) {
    session_start();
}



// if (!isset($_SESSION['user'])) {
//     include_once("./login.php");
// }

if (isset($_SESSION['user'])) {
    require_once("./Entities/user.class.php");


    $user = User::login($_SESSION['user']);
    print_r($user);


    $username = $user[0]["name"];
    $userimg = $user[0]["userImg"];
    // echo $username;
    // echo $userimg;


    // echo "h2>xin chao ".$_SESSION['user']."</h2>";
} else {
    echo "ban chua danng nhap <a href='./login.php' >login</a>";
    header("location:login.php");
    // include_once('./login.php');
}


?>
<!-- <link   rel="stylesheet" href="./css/style.css"> -->
<div class=" " id="header">
    <nav class=" ">
        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-lg-7">
                <form class="d-flex justify-content-center align-items-center">
                    <input class="form-control me-2 rounded-pill bg-body " type="search" placeholder="Search" aria-label="Search">
                    
                    <div>
                        <i class="fa fa-search fs-3" aria-hidden="true"></i>
                    </div>
                </form>

            </div>
            <div class="col-lg-5 d-flex justify-content-end">
                <form>
                    <div class="d-flex  ">
                        <!-- <a href="#" class="link-dark text-decoration-none" aria-expanded="false"> -->
                        <a href="#">
                            <div class="me-2 ms-1 rounded-circle border border-primary" width=" 40px">
                                <!-- <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle "> -->
                                <i class="fas fa-cog" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                            </div>
                        </a>
                        <a href="#">
                            <div class="me-2 ms-1 rounded-circle border border-success" width="40px">
                                <!-- <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle "> -->
                                <i class="fas fa-upload" style="font-size: 20px; margin: 10px; height: 100%;"></i>
                            </div>
                        </a>
                        <a href="#">
                            <div class="me-2 ms-1">
                                <img src="./img/<?php echo $userimg ?>" width="40" height="40" class="rounded-circle ">
                            </div>
                        </a>

                    </div>
                </form>
            </div>



        </div>

    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>