<?php 
    include("../class/Users.php");

    if(isset($_POST["submit-signup"])){
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        $phone = $_POST['tel'];
        $type= "";
        $add = new Customers();
        $result = $add->addUser($name,$email,$phone,$address,$username,$password,$type);
        
        if($result=="true"){
            echo "waradi";
            echo $result;
        }
        else{
            echo "hari";
            echo $result;
        }
    }    
?>