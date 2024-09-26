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
        public function menuViewCat($category){
            $sql = "SELECT * FROM menus WHERE menuCategory= '$category' ";
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
            $searchTxt = '%'.$searchTxt.'%';
            $sql = "SELECT * FROM menus WHERE menuName like '$searchTxt' or menuPrice like '$searchTxt' or menuDescription like '$searchTxt'";
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
        public function adddelfav($customer,$menuId){
            if($this->viewfavourite($customer,$menuId)){
                $sql = "DELETE FROM cus_favourite WHERE customer = '$customer' and menuID = '$menuId' )"; 
                $res = mysqli_query($this->db,$sql); 
            }else{
                $sql = "INSERT INTO `cus_favourite`(`customer`, `menuID`) VALUES ('$customer','$menuId')"; 
                $res = mysqli_query($this->db,$sql);
            }
            // if($res){
            //     return true;
            // }
            // else{
            //     return false;
            // }
        }
        public function viewFavouriteAll($customer){
            $sql = "SELECT * FROM cus_favourite WHERE customer = '$customer'";
            $res = mysqli_query($this->db,$sql);
            if(mysqli_num_rows($res)>0){
                return mysqli_fetch_assoc($res);
            }
        }
        public function viewfavourite($customer,$menuId){
            $sql = "SELECT * FROM cus_favourite WHERE customer = '$customer' and menuID = '$menuId'";
            $res = mysqli_query($this->db,$sql);
            if(mysqli_num_rows($res)==1){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>