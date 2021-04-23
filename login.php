<?php


if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['user'])  != "") {
    header("location: index.php");

}
require_once("./Entities/user.class.php");



if (isset($_POST['btn_login'])) {
   
    $u_user = $_POST['txtuser'];
    $u_pass = $_POST['txtpass'];
    $result = User::checklogin($u_user, $u_pass);


    

    if ($result[0] <= 0) {
?>
        <script>
            alert('tai khoan khong dung')
        </script>
<?php
    } else {
        $_SESSION['user'] = $u_user;
        // echo "<h2>đúng rroi</h2>";
        header('location:/#');
        // header('location:header.php');
        // header('location: footer.php');

    }
}
?>

<link href="./css/styleLongin.css" rel="stylesheet" type="text/css">
<link href="./css/style.css" rel="stylesheet" type="text/css">


<div class="form_wrapper bg-img">
    <div class="form_container">
        <div class="title_container">
            <h2>Responsive Login Form</h2>
        </div>
        <div class="row clearfix">
            <div class="col_half">
                <div class="social_btn fb"><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Sign in with Facebook</a></div>
                <div class="social_btn tw"><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span>Sign in with Twitter</a></div>
                <div class="social_btn gplus"><a href="#"><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>Sign in with Google+</a></div>
                <div class="row clearfix create_account">
                    <div><a href="#">Create an Account</a></div>
                </div>
            </div>
            <div class="col_half last">
                <form method="post" >
                    <div class="input_field"> 
                        <input type="text black" name="txtuser" placeholder="UserName" required />
                    </div>
                    <div class="input_field">
                        <input type="password black" name="txtpass" placeholder="Password" required />
                    </div>
                    <input class="button" name="btn_login" type="submit" value="login In" />
                    <div class="row clearfix bottom_row">
                        <div class="col_half remember_me">
                            <input name="" type="checkbox" value=""> Remember me
                        </div>
                        <div class="col_half forgot_pw"><a href="#">Forgot Password?</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <p class="credit">Developed by <a href="http://www.designtheway.com/responsive-login-form/" target="_blank">Design the way</a></p> -->
<script src="https://use.fontawesome.com/4ecc3dbb0b.js"></script>