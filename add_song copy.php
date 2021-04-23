

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    

</body>
</html>



<?php

require_once("../LAB3/Entities/product.class.php");

require_once("../LAB3/Entities/category.class.php");


if (isset($_POST["btnsubmit"])) {
    //TODO Lấy giá trị từ form collection
    $productID = $_POST["txtID"];
    $productName = $_POST["txtName"];
    $cateID = $_POST["txtCateID"];
    $price = $_POST["txtprice"];
    $quantity = $_POST["txtquantity"];
    $description = $_POST["txtdesc"];
    $picture = $_FILES["txtpic"];

    //TODO khởi tạo đối tượng product
    $newProduct = new Product($productID, $productName, $cateID, $price, $quantity, $description, $picture);
    
    //TODO lưu xuống csdl
    $result = $newProduct->save();



    if (!$result) {
        //TODO truy vấn lỗi
        header("Location: add_product.php?failure");
    } else {
        header("Location: add_product.php?inserted");
    }
}


?>
<?php include_once("header.php"); ?>
<br>
<div class="container" >

    <?php
    if (isset($_GET["inserted"])) {
        echo "<h2>Thêm sản phẩm thành công </h2";
    }
    ?>

    <!-- Form sản phẩm-->
    <div class="container-fluid">
        <form class="container" style="text-align:center" method="post"  enctype="multipart/form-data" style="margin-left: 3rem;">

            <div class="row ">
                <div class="col-lg-6 col-sm-12 text-left">

                    <div class="sanpham">
                        <table>
                            <tr>
                                <th>
                                    <label>Mã sản phẩm </label>

                                </th>
                                <th>
                                    <input type="text" name="txtID" value="<?php echo isset($_POST["txtID"]) ? $_POST["txtID"] : ""; ?>" />
                                
                                </th>
                            </tr>
                            

                            <tr>
                                <th>
                                    <label>Tên sản phẩm </label>

                                </th>
                                <th>
                                    <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />

                                </th>
                            </tr>
                            
                            <tr>
                                <th>
                                    <label> Mô tả sản phẩm </label>

                                </th>
                                <th>
                                    <textarea name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?> "> </textarea>

                                </th>
                            </tr>
                        
                            <tr>
                                <th>
                                    <label>Số lượng sản phẩm</label>

                                </th>
                                <th>
                                    <input type="number" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>" />

                                </th>
                            </tr>
                        
                            <tr>
                                <th>
                                    <label>giá bán</label>

                                </th>
                                <th>
                                    <input type="number" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>" />

                                </th>
                            </tr>


                            <tr>
                                <th>
                                    <label>Chọn loại sản phẩm</label>

                                </th>
                                <th>
                                    <select name="txtCateID">
                                        <option selected>-- Chọn Loại--</option>
                                        <?php
                                        $cates = Category::list_category();
                                        foreach ($cates as $item) {
                                            echo "<option value=" . $item["CateID"] . ">" . $item["CategoryName"] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </th>
                            </tr>

                            <tr>
                                <th>
                                    <label>Đường dẫn hình</label>

                                </th>
                                <th>
                                    <input type="file" id="txtpic" name="txtpic" accept=".PNG,.GIF,.JPG" onchange="loadFile(event)">

                                </th>
                            </tr>

                            <tr>
                                <th>
                                    <input type="submit" name="btnsubmit" value="Thêm sản phẩm" />

                                </th>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>

        </form>
    </div>

</div>
<br>
<?php include_once("footer.php"); ?>