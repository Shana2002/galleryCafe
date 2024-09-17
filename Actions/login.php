<?php 
include("../class/Users.php");
    if(isset($_POST["submit"])){
        $user= $_POST['username'];
        $password= $_POST['password'];

        $userLogin = new Customers();
        // $cusId = $userLogin->login($user,$password);
        // 
        $cusId = $userLogin->login($user,$password);
        if(!$cusId){
            echo 'error';
        }
        else{
            print_r($userLogin->customerDetails($cusId));
        }
    }
?>