<div class="container">



    <?php

    //require_once 'product.class.php';
    require_once("../LAB3/Entities/product.class.php");
    require_once("../LAB3/Entities/category.class.php");
    ?>
    <?php
    include_once("header.php");
    // $prods = Product::list_product();

    if (!isset($_GET["cateid"])) {
        $prods = Product::list_product();
    } else {
        $cateid = $_GET["cateid"];

        $prods = Product::list_product_by_cate($cateid);
    }
    $cates = Category::list_category();
    ?>

    <div class="container text-center">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/list_product.css">
        <!-- <?php echo "<h3> $cates </h3>"; ?> -->

        <!-- <h1><?php echo $item["ProductID"]; ?></h1> -->

        <div class="row">
            <div class="col-lg-3">
                <ul class="list-group row ">

                    <?php
                    foreach ($cates as $item) {
                        echo "<li class='list-group-item list-group-item-action4'> <a  href='list_product.php?cateid=" . $item["CateID"] . "'>" . $item["CategoryName"] . "</a></li>";
                    }
                    ?>

                </ul>
            </div>
            <div class="col-lg-9 ">
                <h3>Sản phẩm cửa hàng</h3><br>

                <div class="row">
                    <?php foreach ($prods as $item) { ?>
                        <div class="col-md-4 " style="padding: 5px">
                            <div class="card mb-4 box-shadow">
                                <a href="product_detail.php?id=<?php echo $item["ProductID"]; ?>">
                                    <img class=" card-img-top" style="   ;" src=" <?php echo $item["Picture"]; ?> ">
                                </a>
                                <div class="card-body">
                                    <p class="text-danger"><?php echo $item["ProductName"]; ?></p>
                                    <p class="text-info"><?php echo $item["Price"]; ?></p>
                                    <p><button type="button" class="btn btn-primary" onclick="location.href='/LAB3/shoping_cart.php?id=<?php echo $item["ProductID"]; ?>' ">Mua hàng</button> </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>


        </div>



    </div>

</div>