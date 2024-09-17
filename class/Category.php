<?php 
    include_once(__DIR__ . '/../config/db_connector.php');
    class Category{
        public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        public function addCatgory($catgoryTitle , $image ){
            // `categories`(`catId`, `catName`, `catImg`)
            $sql = "INSERT INTO categories SET
                        catName  = '$catgoryTitle',
                        catImg = '$image'
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
            $sql = "SELECT * FROM categories";
            $res = mysqli_query($this->db, $sql);
            // `catId`, `catName`, `catDescription`, `catImg`
            if(mysqli_num_rows($res)>0){
                $count = 0;
                while($row = mysqli_fetch_array($res)){
                    $categoryId = $row["catId"];
                    $catgoryTitle = $row["catName"];
                    $image = $row["catImg"];
                    
                    $categoryDetails[$count]=["id"=>$categoryId,"title"=>$catgoryTitle,"image"=>$image];
                    $count++;
                    
                }
                return $categoryDetails;
            }
        }
        public function deleteCategory($catgoryId){
            $sql = "DELETE FROM category WHERE catId = '$catgoryId'";
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