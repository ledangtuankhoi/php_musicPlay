<?php

require_once("./Entities/song.class.php");
//include ("/LAB3/Entities/product.class.php");
require_once("./Entities/category.class.php");
//include ("/LAB3/Entities/category.class.php");

if (isset($_POST["btnsubmit"])) {


    $song_name = $_POST["txtName"];
    $song_cat = $_POST["txtcate"];   
    $song_singer = $_POST["txtsinger"];
    $song_desc = $_POST["txtdesc"];
    $song_file = $_FILES["txtfile"];
    $song_writer = $_POST["txtwriter"];
    $song_img = $_FILES["txtpic"];

    $songs = Song::list_song($cateid);

    //TODO khởi tạo đối tượng product
    // $newProduct = new Song($song_id, $song_cat, $song_album, $song_singer, $song_desc, $song_file, $song_writer, $song_points);
    $newSong = new Song($song_name, $song_cat,  $song_singer, $song_desc, $song_file, $song_writer, $song_img);
    //TODO lưu xuống csdl
    $result = $newSong->save();

    if (!$result) {
        //TODO truy vấn lỗi
        header("Location: add_song.php?failure");
    } else {
        header("Location: add_song.php?inserted");
    }
}


?>




<div id="center " class=" " style="margin: 70px 170px; padding-bottom: 70px; ">
    <?php
    if (isset($_GET["inserted"])) {
        echo "<h2 class=' rounded d-inline-flex' style=' background-color: #00be00;'>Thêm sản phẩm thành công </h2";
    }
    if(isset($_GET["failure"])) echo "<h2 class='bg-danger rounded d-inline-flex  ' style='border: 40px'> LỖI </h2";
    ?>

    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} ">
        <div class="col col-6">

            <form class=" g-3 needs-validation"  method="post" enctype="multipart/form-data" style="text-transform: initial !important;" novalidate>

                <div class="">
                    <label for="txtname" class="form-label">tên bài hát</label>
                    <input type="text" class="form-control" name="txtName"  required value="<?php echo $songs['songname'] ?>">
                    <div class="invalid-feedback">
                        Please provide
                    </div>
                </div>
                <div class="">
                    <label for="txtsinger" class="form-label">tên ca sĩ</label>
                    <input type="text" class="form-control" name="txtsinger" required value="<?php echo $songs['songsinger'] ?>">
                    <div class="invalid-feedback">
                        Please provide
                    </div>
                </div>
                <div class="">
                    <label for="txtwriter" class="form-label">người sáng tác</label>
                    <input type="text" class="form-control" name="txtwriter" required value="<?php echo $songs['songwriter'] ?>">
                    <div class="invalid-feedback">
                        Please provide
                    </div>
                </div>
                <div class="">
                    <label  class="form-label">thể loại bài hát</label>
                    <select name="txtcate"  class="form-select">
                        <option selected value="<?php echo $songs['songcat'] ?>" ><?php echo $item['songcat'] ?></option>
                        <?php
                        $cates = Category::list_category();
                        foreach ($cates as $item) {
                            echo "<option value=" . $item["catname"] . ">" . $item["catname"] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="">
                    <label for="txtdesc" class="form-label">mô tả bài nhạc</label>
                    <textarea class="form-control" name="txtdesc" rows="3" value="<?php echo $songs['songdesc'] ?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">đường dẫn hình</label>
                    <input class="form-control" type="file" accept=".PNG,.GIF,.JPG" name="txtpic" onchange="loadFile(event)">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">đường dẫn file audio</label>
                    <input class="form-control" type="file" accept="audio/*" name="txtfile" onchange="handleFiles(event)">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="btnsubmit">Sửa</button>
                </div>
            </form>
        </div>
        <div class="col col-6 ">
            <p>review</p>
            <div class="">

                <img style="float: right;" id="output" class="border border-primar img-thumbnail "  />
                <audio style="float: right;" id="audio" controls>
                    <source src="" id="src" />
                </audio>
            </div>
            <script>
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                        URL.revokeObjectURL(output.src) // free memory
                    }
                };
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
            </script>
            <!-- <input type="file" id="upload" /> -->
            <script>
                function handleFiles(event) {
                    var files = event.target.files;
                    $("#src").attr("src", URL.createObjectURL(files[0]));
                    document.getElementById("audio").load();
                }

                document.getElementById("txtfile").addEventListener("change", handleFiles, false);
            </script>

        </div>
    </div>


</div>
<!-- Form sản phẩm-->