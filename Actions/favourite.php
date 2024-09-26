<?php
    include('../config/constant.php');
    include('../class/menu.php');
    $cusId = $_SESSION['cusid'];
    if(isset($_GET['menuId'])){
        $menuId = $_GET['menuId'];
        $fav = new Menu();
        $fav->adddelfav($cusId,$menuId);
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            header('location:'.SITEURL.'searchres.php?search='.$search);
        }elseif(isset($_GET['item'])){
            $item = $_GET['item'];
            header('location:'.SITEURL.'item.php?id='.$item);
        }
        elseif(isset($_GET['favtab'])){
            $_SESSION['openfav']="0";
            header('location:'.SITEURL);
        }
        elseif(isset($_GET['menusite'])){
            header('location:'.SITEURL.'menu.php');
        }
        elseif(isset($_GET['searchres'])){
            $searchres = $_GET['searchres'];
            header('location:'.SITEURL.'searchres.php?search='.$searchres);
        }
        
        

    }
?>