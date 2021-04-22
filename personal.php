<?php

if (!isset($_SESSION)) {
    echo "asdfasfsad";
?>

    <script>
        console.log("asdfsdasfa     ")
    </script>
<?php
    include_once("login.php");
} else {
    require_once("./Entities/song.class.php");
    require_once("./Entities/category.class.php");
    $songs = Song::list_song();


?>


    <div id="person">
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-4">
                <div class="acc_img">
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>

<?php
}
?>