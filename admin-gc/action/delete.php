<?php 
    include("../../class/Category.php");
    include("../../class/Events.php");
    include("../../class/Menu.php");
    include("../../class/Promotion.php");
    include("../../class/Users.php");
    include("../../config/constant.php");
    if(isset($_GET['catDel'])){
        $catID = $_GET['catDel'];
        $category = new Category();
        $category->deleteCategory($catID);
        $_SESSION['cat-menu']='2';
        header('location:'.SITEURL.'admin-gc');
    }
?>