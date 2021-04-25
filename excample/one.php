<?php

// session_start();
// session_destroy();



require_once("./Entities/song.class.php");
require_once("./Entities/category.class.php");

$id = isset($_GET['id']) ? $_GET['id'] : "";
$songs = Song::song_by_id($id);
if ($songs) {

    if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['soluong'] += 1;
            var_dump('da ton tai ! them so luong');
        } else {
            $_SESSION['cart'][$id]['soluong'] = 1;
            var_dump('da ton tai ! giu nguyen');
            // header("location:/php_musicPlay/"); 
        }
    } else {
        // var_dump("chua co");
        $_SESSION['cart'][$id]['soluong'] = 1;
        // var_dump("da them");
        // header("location:/php_musicPlay/");exit(); 

    }
}







echo "<br/>";
if (isset($_SESSION['cart'])) {
    // foreach ($_SESSION['cart'] as $item) {
    echo "<pre  />";
    var_dump($_SESSION['cart']);
    // var_dump($item['id']);
    // }
    echo "<br/>";
}




?>





<?php
// session_start();
// require("includes/connection.php");


$songs = Song::list_song();

echo "<br>";
foreach ($songs as $item) {
    print_r($item['id']);
    print_r($item['songname']);
    // print_r($item['songname']);

?>
    < <a style="margin: 20px" href='index.php?action=add_list&id=<?php echo $item['id'] ?>'>add</a><br />
    <?php
}

    ?>