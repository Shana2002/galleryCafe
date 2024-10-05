<?php 
    include_once(__DIR__ . '/../config/db_connector.php');
    class Promotion{
        public $db;
        public $connector;
        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        // INSERT INTO `promotions`(`promId`, `prmoName`, `promDescription`, `startDate`, `endDate`, `promImage`)
        public function addpromotion($Title ,$description, $image,$sDate,$eDate ){
            $sql = "INSERT INTO promotions SET
                        prmoName  = '$Title',
                        promDescription = '$description',
                        startDate = '$sDate',
                        endDate  = '$eDate',
                        promImage = '$image'
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
            $sql = "SELECT * FROM promotions";
            $res = mysqli_query($this->db, $sql);
            $count = 0;
            // INSERT INTO `promotions`(`promId`, `prmoName`, `promDescription`, `startDate`, `endDate`, `promImage`)
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_array($res)){
                    $id = $row["promId"];
                    $title = $row["prmoName"];
                    $description = $row["promDescription"];
                    $image = $row["promImage"];
                    $sDate = $row["startDate"];
                    $eDate = $row["endDate"];
                    $promotions[$count]=["id"=>$id,"title"=>$title,"description"=>$description,"image"=>$image,"start"=>$sDate,"end"=>$eDate];
                    $count++;
                }
                return $promotions;
            }
            else{
                return null;
            }
            
        }
        public function deletepromotion($id){
            $sql = "DELETE FROM promotions WHERE promId = '$id' ";
            $res = mysqli_query($this->db, $sql);
        }
    }
?>