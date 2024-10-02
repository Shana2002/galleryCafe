<?php 
    include_once('../../../config/constant.php');
    include_once('../../../class/Users.php');
    $user = new Staff() ;

    if(isset($_POST['add-user'])){
        // username , email , usertype
        $username = $_POST['username'];
        $email = $_POST['email'];
        $type = $_POST['usertype'];

        if($user->addUser($username, $email,'','','','', $type)){
            $_SESSION['userAdd']='0';
            header('location:'.SITEURL.'admin-gc/');
        }
        
    }

?>