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
    if(isset($_GET['menuDel'])){
        $menuID = $_GET['menuDel'];
        $menu = new Menu();
        $menu->menuDelete($menuID);
        $_SESSION['menu-view']='2';
        header('location:'.SITEURL.'admin-gc');
    }
    if(isset($_GET['promDel'])){
        $promID = $_GET['promDel'];
        $prom = new Promotion();
        $prom->deletepromotion($promID);
        $_SESSION['prom-view']='2';
        header('location:'.SITEURL.'admin-gc');
    }
    if(isset($_GET['evtDel'])){
        $evtID = $_GET['evtDel'];
        $evt = new Events();
        $evt->deleteEvent($evtID);
        $_SESSION['evt-view']='2';
        header('location:'.SITEURL.'admin-gc');
    }
?>