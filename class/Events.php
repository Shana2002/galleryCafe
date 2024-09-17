<?php 
    include("config/db_connector.php");
    class Events{
        public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        // INSERT INTO `event`(`id`, `title`, `description`, `image`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
        public function addEvent($catgoryTitle ,$description, $image ){
            $sql = "INSERT INTO event SET
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
        public function viewEvents(){
            $sql = "SELECT * FROM event";
            $res = mysqli_query($this->db, $sql);
            $count = 0;
            while($row = mysqli_fetch_array($res)){
                $id = $row["id"];
                $title = $row["title"];
                $description = $row["description"];
                $image = $row["image"];
                $events[$count]=["id"=>$id,"title"=>$title,"description"=>$description,"image"=>$image];
                $count++;
            }
            return $events;
        }
        public function deleteEvent($id){
            $sql = "DELETE FROM event WHERE id = '$id' ";
            $res = mysqli_query($this->db, $sql);
        }
    }
?>