<?php 
include_once('../../config/constant.php');
include_once('../../class/Users.php');
$user = new Staff() ;

if(isset($_POST['submit-login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($user->login($username,$password)){
        $_SESSION['login-user'] = $username;
        $_SESSION['type'] = $user->staffdetails($username)['type'];
        header('location:'.SITEURL.'admin-gc/');
    }
    else{
        $_SESSION['error-login'] = '0';
        header('location:'.SITEURL.'admin-gc/');
    }
}

?>