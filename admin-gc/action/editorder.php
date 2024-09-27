<?php
    include("../../config/constant.php");
    include("../../class/Order.php");
    $order = new Order();
    if(isset($_GET['addprep'])){
        $orderID = $_GET['addprep'];
        $row = $_GET['row'];
        $billid = $_GET['billid'];
        
        
        $order->statusuoorder($orderID,'start prepairing');
        if($order){
            $billup = $order->statusuoBill($billid,'start cooking');
            $_SESSION['openor']=$row;
            header('location:'.SITEURL.'admin-gc');
        }
    }elseif(isset($_GET['prepdone'])){
        $orderID = $_GET['prepdone'];
        $row = $_GET['row'];
        $billid = $_GET['billid'];
        
        
        $order->statusuoorder($orderID,'prepaired');
        if($order){
            $prepaired = true;
            $orderArray = $order->displayOrder($billid);
            foreach($orderArray as $orderrow){
                if($orderrow['orderstatus']!='prepaired'){
                    $prepaired = false;
                    break;
                }
            }
            if($prepaired){
                $billup = $order->statusuoBill($billid,'order done');
            }
            $_SESSION['openor']=$row;
            header('location:'.SITEURL.'admin-gc');
        }
    }elseif(isset($_GET['billdone'])){
        $billid = $_GET['billdone'];
        $billup = $order->statusuoBill($billid,'dilivered');
        if($billup){
            $_SESSION['openor']=1;
            header('location:'.SITEURL.'admin-gc');
    }
    }
?>