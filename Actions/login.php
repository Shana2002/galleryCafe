<?php 
include('../config/constant.php');
include("../class/Users.php");
    if(isset($_POST["login-cus"])){
        $user= $_POST['username'];
        $password= $_POST['password'];

        $userLogin = new Customers();
        // $cusId = $userLogin->login($user,$password);
        // 
        $cusId = $userLogin->login($user,$password);
        if($cusId==false){
            $_SESSION['cus-psw-wrong']=0;
            header("location:".SITEURL);
        }
        else{
            $_SESSION['cusid']=$cusId;
            header("location:".SITEURL);
        }
    }
?>