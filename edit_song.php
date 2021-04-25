<?php
require_once('./Entities/song.class.php');
require_once('./Entities/category.class.php');

$cates = Category::list_category();
$song_id = Song::song_by_id($_GET['id']);


if (isset($_POST["btnsubmit"])) {


    $songname = $_POST["txtName"];
    $songcat = $_POST["txtcate"];
    $songalbum = $_POST["txtalbum"];
    $songsinger = $_POST["txtsinger"];
    $songdesc = $_POST["txtdesc"];
    $songfile = $_FILES["txtfile"];
    $songwriter = $_POST["txtwriter"];
    $songimg = $_FILES["txtpic"];

   


    //TODO khởi tạo đối tượng product

    //TODO lưu xuống csdl
    $result = Song::update($songname, $songcat, $songalbum, $songsinger, $songfile, $songdesc, $songwriter, $songimg);
    // echo "kq $result";
    if (!$result) {
        //TODO truy vấn lỗi

        // header("Location:?failure");
    } else {
        // header("Location:?inserted");
    }
}

if ($song_id <= 0) {

?>
    <script>
        alert('khoong ton tai san pham')
    </script>
<?php

}
?>

<div id="center " class=" " style=" padding-bottom: 70px; ">
    <?php

    if (isset($_GET["inserted"])) {
        echo "<h2 class=' rounded d-inline-flex' style=' background-color: #00be00;'>SỬA sản phẩm thành công </h2";
    }
    if (isset($_GET["failure"])) echo "<h2 class='bg-danger rounded d-inline-flex  ' style='border: 40px'> LỖI </h2";


    ?>


    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} ">
        <div class="col col-6">

            <form class=" g-3 needs-validation" method="POST" enctype="multipart/form-data" style="text-transform: initial !important;">

                <div class="">
                    <label for="txtname" class="form-label">tên bài hát</label>
                    <input type="text" class="form-control" name="txtName" value="<?php echo $song_id[0]['songname']; ?>">
                    <!-- <div class="invalid-feedback">
                            Please provide
                        </div> -->
                </div>
                <div class="">
                    <label for="txtsinger" class="form-label">tên ca sĩ</label>
                    <input type="text" class="form-control" name="txtsinger" value="<?php echo $song_id[0]['songsinger']; ?>">
                    <!-- <div class="invalid-feedback">
                        Please provide
                    </div> -->
                </div>
                <div class="">
                    <label for="txtsinger" class="form-label">tên album</label>
                    <input type="text" class="form-control" name="txtalbum" value="<?php echo $song_id[0]['songalbum']; ?>">
                    <!-- <div class="invalid-feedback">
                        Please provide
                    </div> -->
                </div>
                <div class="">
                    <label for="txtwriter" class="form-label">người sáng tác</label>
                    <input type="text" class="form-control" name="txtwriter" value="<?php echo $song_id[0]['songwriter']; ?>">
                    <!-- <div class="invalid-feedback">
                        Please provide
                    </div> -->
                </div>
                <div class="">
                    <label class="form-label">thể loại bài hát</label>
                    <select name="txtcate" class="form-select">
                        <option><?php echo $song_id[0]['songcat']; ?></option>
                        <?php
                        foreach ($cates as $item) {
                            echo "<option style='color:black;' value=" . $item["catname"] . ">" . $item["catname"] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="">
                    <label for="txtdesc" class="form-label">mô tả bài nhạc</label>
                    <textarea class="form-control" name="txtdesc" rows="3" value="<?php echo $song_id[0]['songdesc']; ?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">hình</label>
                    <input class="form-control" type="file" id="formFile" src="<?php echo $song_id[0]['songimg']; ?>" name="txtpic" accept=".PNG,.GIF,.JPG">
                    <!-- <input type="file" id="txtpic" name="txtpic" accept=".PNG,.GIF,.JPG" onchange="loadFile(event)"> -->
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">đường dẫn file audio</label>
                    <input class="form-control" src="<?php echo $song_id[0]['songfile']; ?>" type="file" accept="audio/*" id="txtfile" name="txtfile">
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