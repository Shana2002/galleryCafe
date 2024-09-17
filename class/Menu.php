<?php 
    include_once(__DIR__ . '/../config/db_connector.php');
    class Menu{
        public $connector;
        public $db;
        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        public function menuView(){
            $sql = "SELECT * FROM menus";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) > 0){
                $count=0;
                // INSERT INTO `menus`(`menuId`, `menuName`, `menuCategory`, `menuDescription`, `menuPrice`, `menuImage`)
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["menuId"];
                    $name = $row["menuName"];
                    $description = $row["menuDescription"];
                    $category = $row["menuCategory"];
                    $price = $row["menuPrice"];
                    $image = $row["menuImage"];

                    $menuDetails[$count]=["id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image];
                    $count++;
                }
                return $menuDetails;
            }
        }
        public function menuSearch($searchTxt){
            $sql = "SELECT * FROM menus WHERE name = '$searchTxt' or price = '$searchTxt' or description = '$searchTxt'";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) > 0){
                $count=0;
                // INSERT INTO `menus`(`menuId`, `menuName`, `menuCategory`, `menuDescription`, `menuPrice`, `menuImage`)
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["menuId"];
                    $name = $row["menuName"];
                    $description = $row["menuDescription"];
                    $category = $row["menuCategory"];
                    $price = $row["menuPrice"];
                    $image = $row["menuImage"];

                    $menuDetails[$count]=["id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image];
                    $count++;
                }
                return $menuDetails;
            }
        }
        public function menuSelectedview($id){
            $sql = "SELECT * FROM menus WHERE menuId = '$id'";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["menuId"];
                    $name = $row["menuName"];
                    $description = $row["menuDescription"];
                    $category = $row["menuCategory"];
                    $price = $row["menuPrice"];
                    $image = $row["menuImage"];

                    $menuSelectedDetails =array("id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image);
                    
                }
                return $menuSelectedDetails;
            }
        }
        public function menuAdd($name ,$description ,$category,$price,$image){
            // INSERT INTO `menus`(`menuId`, `menuName`, `menuCategory`, `menuDescription`, `menuPrice`, `menuImage`)
            $sql = "INSERT INTO menus SET 
                        menuName = '$name',
                        menuDescription = '$description',
                        menuCategory = '$category',
                        menuPrice = '$price',
                        menuImage = '$image'
                        ";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            }
            else{
                return false;
            }
        }
        public function menuEdit($id,$name,$description,$price,$image){

        }
        public function menuDelete($id){
            $sql = "DELETE FROM menus WHERE menuId = '$id'";
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