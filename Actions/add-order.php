<?php 
    include("../config/constant.php");
    include("../config/db_connector.php");
    $connector = new Db_connector();
    $conn = $connector->getConnection();
if(isset($_GET['order'])){
    $cusid = $_SESSION['cusid'];
    $subtot = $_SESSION['subtot'];

    $sql = "INSERT INTO Bills (cusId, subTotal, billdate, billtime, billStatus) 
    VALUES ($cusid,'$subtot', CURDATE(), CURTIME(), 'get order')";
    if (mysqli_query($conn, $sql)) {
        // Get the last inserted billId
        $last_bill_id = mysqli_insert_id($conn);
        foreach ($_SESSION['cartArray'] as $row) {
            $id = $row['id'];
            $qty = $row['qty'];
            $sqladd = "INSERT INTO `billorder`(`billId`, `menuId`, `qty`) VALUES
                 ('$last_bill_id','$id','$qty')";
            $res = mysqli_query($conn, $sqladd);
            if($res){
                unset($_SESSION['cartArray']);
                header("location:".SITEURL);
            }
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>