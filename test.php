<?php
    include("class/Category.php");
    include("class/Events.php");
    include("class/Menu.php");
    include("class/Promotion.php");
    include("class/Users.php");
    include("config/constant.php");
    $category = new Category();
    $menuClass = new Menu();
    $promotion = new Promotion();
    $event = new Events();
    $cusid = 1;
    $favarray = $menuClass->viewFavouriteAll($cusid);
    if($favarray==null){
        echo "hari";
    }
    else{
        print_r($favarray);
        echo count($favarray);
    }

?>