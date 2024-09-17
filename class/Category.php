<?php 
    include_once("../config/db_connector.php");
    class Category{
        public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        public function addCatgory($catgoryTitle , $image ){
            // `category`(`id`, `title`, `image`)
            $sql = "INSERT INTO category SET
                        title  = '$catgoryTitle',
                        image = '$image'
                ";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            }
            else{
                return false;
            }

        }
        public function categoryView(){
            $sql = "SELECT * FROM category";
            $res = mysqli_query($this->db, $sql);
            // `catId`, `catName`, `catDescription`, `catImg`
            if(mysqli_num_rows($res)>0){
                $count = 0;
                while($row = mysqli_fetch_array($res)){
                    $categoryId = $row["id"];
                    $catgoryTitle = $row["title"];
                    $image = $row["image"];
                    
                    $categoryDetails[$count]=["id"=>$categoryId,"title"=>$catgoryTitle,"image"=>$image];
                    $count++;
                    
                }
                return $categoryDetails;
            }
        }
        public function deleteCategory($catgoryId){
            $sql = "DELETE FROM category WHERE id = '$catgoryId'";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>