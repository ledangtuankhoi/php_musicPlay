<?php // IDEA:
//require_once 'db.class.php';

require_once("./config/db.class.php");
//echo 'index.php';




class Song
{


    public $id;
    public $song_name;
    public $song_cat;
    public $song_album;
    public $song_singer;
    public $song_desc;
    public $song_file;
    public $song_writer;
    public $song_points;
    public $song_img;



    public function __construct($song_name, $song_cat, $song_singer, $song_desc, $song_file, $song_writer, $song_img)
    {


        $this->song_name = $song_name;
        // $this->id = $song_id;
        $this->song_cat = $song_cat;  // loaij nhac
        // $this->song_album = $song_album; // ten album
        $this->song_singer = $song_singer;  // ten ca si
        $this->song_desc = $song_desc;   // mô tả
        $this->song_file = $song_file; //đường dẫn file
        $this->song_writer = $song_writer; // lời bài hát
        // $this->song_points = $song_points; // điểm đánh giá
        $this->song_img = $song_img; // điểm đánh giá
    }
    //Luu san pham
    public function save()
    {



        //Xử lý upload hình ảnh
        $file_temp = $this->song_img['tmp_name'];
        $user_file = $this->song_img['name'];
        $timestamp = date("Y") . date("m") . date("d") . date("h") . date("i") . date("s");
        $filepath = "./img/" . $timestamp . $user_file;

        if (move_uploaded_file($file_temp, $filepath) == false) {
            return false;
        }

        move_uploaded_file($file_temp, $filepath);

        //Xử lý upload file audio
        $audio_temp = $this->song_file['tmp_name'];
        $audio_file = $this->song_file['name'];
        // $timestamp = date("Y") . date("m") . date("d") . date("h") . date("i") . date("s");
        $audio_path = "./audio/" . $audio_file;

        if (move_uploaded_file($audio_temp, $audio_path) == false) {
            return false;
        }

        move_uploaded_file($file_temp, $audio_path);

        $db = new Db();

        $sql = "INSERT INTO tblsong(songname,songcat,songsinger,songfile,songdesc,songwriter,songimg) VALUES 
        ('$this->song_name','$this->song_cat','$this->song_singer','$audio_path','$this->song_desc','$this->song_writer','$filepath')";

        $result = $db->query_execute($sql);
            ?>
                    <script type="text/javascript">
                        console.log("resule $result")
                    </script>
            <?php

        echo " <h1>$result </h1>";
        return $result;
    }

    public static function list_song()
    {
        $db = new Db();
        $sql = "SELECT * FROM tblsongs";
        $result = $db->select_to_array($sql);
        return $result;
    }

    public static function song_by_id($id)
    {
        $db = new Db();
        $sql = "SELECT * FROM tblsongs where id = '$id'";
        $result = $db->select_to_array($sql);
        return $result;
    }



    public static function list_song_by_cate($cateID)
    {
        $db = new Db();
        // $sql = "select * from tblsongs where CateID = '$cateID' ";
        $sql = "SELECT * FROM `tblsongs` WHERE songcat = '$cateID'";
        // SELECT * FROM tblsongs WHERE songcat = (SELECT catname FROM tblcategory WHERE id= "34");
        $result = $db->select_to_array($sql);
        return $result;
    }

    public static function like_song($songName)
    {
        $db = new Db();
        // $sql = "select * from tblsongs where CateID = '$cateID' ";
        $sql = "UPDATE tblsongs SET songpoints = songpoints + 1 WHERE songname = '$songName'";
        // SELECT * FROM tblsongs WHERE songcat = (SELECT catname FROM tblcategory WHERE id= "34");
        // $result = $db->select_to_array($sql);
        $result = $db->query_execute($sql);
        return $result;
    }

    public static function list_singer_yeu_thich()
    {
        $db = new Db();
        // $sql = "select * from tblsongs where CateID = '$cateID' ";
        $sql = "SELECT  `songsinger`,   `songpoints`, `songimg` FROM `tblsongs` ORDER BY songpoints DESC";
        // SELECT * FROM tblsongs WHERE songcat = (SELECT catname FROM tblcategory WHERE id= "34");
        // $result = $db->select_to_array($sql);
        $result = $db->select_to_array($sql);
        return $result;
    }

    public static function list_song_yeu_thich()
    {
        $db = new Db();
        // $sql = "select * from tblsongs where CateID = '$cateID' ";
        $sql ="SELECT  `songname`,   `songpoints`, `songimg` FROM `tblsongs` ORDER BY songpoints ASC";
        // SELECT * FROM tblsongs WHERE songcat = (SELECT catname FROM tblcategory WHERE id= "34");
        // $result = $db->select_to_array($sql);
        $result = $db->select_to_array($sql);
        return $result;
    }



    public static function list_song_relate($cateID, $id)
    {
        $db = new Db();
        $sql = "select * from product where CateID = '$cateID'  and  ProductID != '$id'";
        $result = $db->select_to_array($sql);
        return $result;
    }


    public static function get_song($id)
    {
        $db = new Db();
        $sql = "select * from product where ProductID = '$id' ";
        $result = $db->select_to_array($sql);
        return $result;
    }
}
