<?php 
    include("../config/constant.php");
    session_destroy();
    header("location:".SITEURL);
?>