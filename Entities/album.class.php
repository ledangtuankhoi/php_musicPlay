<?php //IDEA:
require_once("./config/db.class.php");

class Album
{

    public $id;
    public $albumcat;
    public $albumname;
    public $albumsinger;
    public $albumwriter;
    public $albumdesc;
    public $albumimage;




    // public function __construct($cate_name,$desc,$cat_image)
    public function __construct($albumcat, $albumname, $albumsinger, $albumwriter, $albumdesc, $albumimage)
    {
    $this->albumcat= $albumcat;
    $this->albumname= $albumname;
    $this->albumsinger= $albumsinger;
    $this->albumwriter= $albumwriter;
    $this->albumdesc= $albumdesc;
    $this->albumimage= $albumimage;


    }
    //Lấy danh sách chuyên mục loại sản phẩm
    public static function list_album(){
        $db = new Db();
        $sql = "SELECT * FROM `tblcategory`";
        $result = $db-> select_to_array($sql);
        return $result;
    }


    public static function list_album_input_outIMG($id){
        $db = new Db();
        $sql = "SELECT catimage FROM tblcategory = '$id'";
        $result = $db-> select_to_array($sql);
        return $result;
    }

    public static function list_album_by_cate($id){
        $db = new Db();
        $sql = "SELECT catimage FROM tblcategory = '$id'";
        $result = $db-> select_to_array($sql);
        return $result;
    }

    

}
