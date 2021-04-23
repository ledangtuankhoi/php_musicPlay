<?php //IDEA:
require_once("./config/db.class.php");

class Category
{


    

    public $id;
    public $catname;
    public $catdesc;
    public $catimage;
    // public $cateID;
    // public $categoryName;
    // public $description;

    public function __construct($cate_name,$desc,$cat_image)
    {

        $this->catname = $cate_name;
        $this->catdesc = $desc;
        $this->catimage = $cat_image;
    }
    //Lấy danh sách chuyên mục loại sản phẩm
    public static function list_category(){
        $db = new Db();
        $sql = "SELECT * FROM tblcategory";
        $result = $db-> select_to_array($sql);
        return $result;
    }
    public static function list_category_input_cate_outIMG($cate){
        $db = new Db();
        $sql = "SELECT catimage FROM tblcategory = '$cate'";
        
        $result = $db-> select_to_array($sql);
        return $result;
    }

    public static function list_category_input_id_outName($id){
        $db = new Db();
        $sql = "SELECT catname FROM tblcategory  WHERE id= '$id'";
        // $sql = 'SELECT catname FROM tblcategory WHERE id= "34"'
        $result = $db-> select_to_array($sql);
        return $result;
    }

}
?>