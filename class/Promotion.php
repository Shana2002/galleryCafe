<?php 
    include("config/db_connector.php");
    class Promotion{
        public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        // INSERT INTO `promotion`(`id`, `title`, `descriptiom`, `image`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
        public function addpromotion($catgoryTitle ,$description, $image ){
            $sql = "INSERT INTO promotion SET
                        title  = '$catgoryTitle',
                        description = '$description',
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
        public function viewpromotions(){
            $sql = "SELECT * FROM promotion";
            $res = mysqli_query($this->db, $sql);
            $count = 0;
            while($row = mysqli_fetch_array($res)){
                $id = $row["id"];
                $title = $row["title"];
                $description = $row["description"];
                $image = $row["image"];
                $promotions[$count]=["id"=>$id,"title"=>$title,"description"=>$description,"image"=>$image];
                $count++;
            }
            return $promotions;
        }
        public function deletepromotion($id){
            $sql = "DELETE FROM promotion WHERE id = '$id' ";
            $res = mysqli_query($this->db, $sql);
        }
    }
?>