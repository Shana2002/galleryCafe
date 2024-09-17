<?php 
    include_once(__DIR__ . '/../config/db_connector.php');
    class Events{
        public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        // INSERT INTO `gc_events`(`eventId`, `eventName`, `eventDescription`, `eventDate`, `eventTime`, `eventImage`)
        public function addEvent($catgoryTitle ,$description, $image,$sDate,$sTime ){
            $sql = "INSERT INTO gc_events SET
                        eventName  = '$catgoryTitle',
                        eventDescription = '$description',
                        eventDate = '$sDate',
                        eventTime = '$sTime',
                        eventImage = '$image'
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
            $sql = "SELECT * FROM gc_events";
            $res = mysqli_query($this->db, $sql);
            $count = 0;
            // INSERT INTO `gc_events`(`eventId`, `eventName`, `eventDescription`, `eventDate`, `eventTime`, `eventImage`)
            while($row = mysqli_fetch_array($res)){
                $id = $row["eventId"];
                $title = $row["eventName"];
                $description = $row["eventDescription"];
                $image = $row["eventImage"];
                $stime = $row["eventTime"];
                $sdate = $row["eventDate"];
                $events[$count]=["id"=>$id,"title"=>$title,"description"=>$description,"image"=>$image,"sTime"=>$stime,"sDate"=>$sdate];
                $count++;
            }
            return $events;
        }
        public function deleteEvent($id){
            $sql = "DELETE FROM gc_events WHERE eventId = '$id' ";
            $res = mysqli_query($this->db, $sql);
        }
    }
?>