<?php 
    include("../config/constant.php");
    include("../config/db_connector.php");
    $connector = new Db_connector();
    $conn = $connector->getConnection();
    if(isset($_POST['add-sub'])){
        // name,email,tel,date,time,msg
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `cusreservation`(`name`, `email`, `mobile`, `resdate`, `restime`, `msg`) 
                VALUES ('$name','$email','$tel','$date','$time','$msg')";
        $result = mysqli_query($conn,$sql);
        if($result) {
            header("locationL".SITEURL.'reservation.php');
        }
        else {
            header('location:'.SITEURL);
        }
    }

?>