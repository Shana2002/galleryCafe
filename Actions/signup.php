<?php 
    include("../class/Users.php");
    include('../config/constant.php');
    if(isset($_POST["login-cus"])){
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        $phone = $_POST['mobile'];
        $type= "";
        $add = new Customers();
        $result = $add->addUser($name,$email,$phone,$address,$username,$password,$type);
        
        if($result==false){
            $_SESSION['cus-sign-wrong']="0";
            header("location:".SITEURL);
        }
        else{
            $_SESSION['open-log']="0";
            header("location:".SITEURL);
        }
    }
?>