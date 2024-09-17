<?php 
    include("config/db_connector.php"); 
    class Menu{
        public $connector;
        public $db;
        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        public function menuView(){
            $sql = "SELECT * FROM menu";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) > 0){
                $count=0;
                // `menu`(`id`, `name`, `description`, `category`, `price`, `image`)
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["id"];
                    $name = $row["name"];
                    $description = $row["description"];
                    $category = $row["category"];
                    $price = $row["price"];
                    $image = $row["image"];

                    $menuDetails[$count]=["id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image];
                    $count++;
                }
                return $menuDetails;
            }
        }
        public function menuSearch($searchTxt){
            $sql = "SELECT * FROM menu WHERE name = '$searchTxt' or price = '$searchTxt' or description = '$searchTxt'";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) > 0){
                $count=0;
                // `menu`(`id`, `name`, `description`, `category`, `price`, `image`)
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["id"];
                    $name = $row["name"];
                    $description = $row["description"];
                    $category = $row["category"];
                    $price = $row["price"];
                    $image = $row["image"];

                    $menuDetails[$count]=["id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image];
                    $count++;
                }
                return $menuDetails;
            }
        }
        public function menuSelectedview($id){
            $sql = "SELECT * FROM menu WHERE id = '$id'";
            $result = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_assoc($result)){
                    $menuId = $row["id"];
                    $name = $row["name"];
                    $description = $row["description"];
                    $category = $row["category"];
                    $price = $row["price"];
                    $image = $row["image"];

                    $menuSelectedDetails =array("id"=>$menuId,"name"=>$name,"description"=>$description,"category"=>$category,"price"=>$price,"image"=>$image);
                    
                }
                return $menuSelectedDetails;
            }
        }
        public function menuAdd($name ,$description ,$category,$price,$image){
            $sql = "INSERT INTO menu SET 
                        name = '$name',
                        description = '$description',
                        category = '$category',
                        price = '$price',
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
        public function menuEdit($id,$name,$description,$price,$image){

        }
        public function menuDelete($id){
            $sql = "DELETE FROM menu WHERE id = '$id'";
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