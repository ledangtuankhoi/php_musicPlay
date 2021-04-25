<?php //IDEA:
require_once("config/db.class.php");

class User
{

    public $userID;
    public $userName;
    public $name;
    public $password;

    public function __construct($u_name, $u_email, $u_pass)
    {
        $this->userName = $u_name;
        $this->name = $u_email;
        $this->password = $u_pass;
    }

    public function User($u_name, $u_pass)
    {
        $this->userName = $u_name;
        // $this->name = $u_email;
        $this->password = $u_pass;
    }


    // public function save(){

    //     $db = new Db();
    //     $sql2 = "SELECT * FORM user WHERE UserName = '$this->userName' OR Password = '$this->password'";
    //     // $sql1 = "select * form user where UserName = 'username' or Password = 'password'";
    //     $result2 = $db->query_execute($sql2);
    //     if($result2 > 1){
    //         return $result2      ;
    //     }
    //     else{
    //         // $sql = "SELECT * FROM user WHERE UserName = '$username' AND Password = '$password'";
    //        $sql = "INSERT INTO user(UserName, Email, Password) VALUES('".$this->userName."','".$this->email."','".$this->password."')";

    //         $result = $db->query_execute($sql);
    //         return $result;
    //     }


    // }

    public function save()
    {
        $db = new Db();
        $sql = "INSERT INTO `tblusers`(`name`, `username`, `password`) VALUES( '" . $this->name . "','" . $this->userName . "','" . $this->password . "')";
        $result = $db->query_execute($sql);
        return $result;
    }

    // public function check(){
    //     $db = new Db();
    //     $sql = "SELECT * FORM user WHERE userName =: ".$this->userName." AND Password =: ".$this->password."";
    //     $result = $db->query_execute($sql);
    //     return $result;

    // }

    public static function checklogin($username, $password)
    {

        // $password = md5($password);

        $db = new Db();
        $sql = "SELECT * FROM tblusers WHERE username = '$username' AND password = '$password'";
        // echo "<h3>" . $sql . "</h3>";
        
        $result = $db->select_to_array($sql);

        // print_r($result);

        return $result;

    }

    public static function  login($user)
    {
        $db = new Db();
        $sql = "SELECT `name`, `username`, `userImg` FROM tblusers WHERE `username` = '$user'";
        //echo "<h3>".$sql."</h3>";
        $result = $db->select_to_array($sql);
        // echo $result;
        return $result;

    }
}
