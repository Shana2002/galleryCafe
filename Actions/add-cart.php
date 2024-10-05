<?php
include("../config/constant.php");
if (isset($_GET["cart"])) {
    $id = $_GET['cart'];
    $qty = 1;

    if (!isset($_SESSION['cartArray'])) {
        $_SESSION['cartArray'] = [];
    }
    $counter = 0;
    $found = false;

    foreach ($_SESSION['cartArray'] as $index => $row) {

        if ($row['id'] == $id) {
            $qty = $_SESSION['cartArray'][$index]['qty'];
            $qty++;
            $_SESSION['cartArray'][$index]['qty'] = $qty;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $_SESSION['cartArray'][] = ['id' => $id, 'qty' => $qty];
    }

    if (isset($_GET['menu'])) {
        header('location:' . SITEURL . 'menu.php');
    }elseif (isset($_GET['search'])) {
        header('location:'.SITEURL.'searchres.php?search='. $_GET['search']);
    }elseif (isset($_GET['item'])) {
        header('location:'.SITEURL.'item.php?id='. $_GET['item']);
    }
}
if (isset($_GET['delCart'])) {
    $id = $_GET['delCart'];
    if (isset($_SESSION['cartArray'])) {
        foreach ($_SESSION['cartArray'] as $index => $row) {
            if ($row['id'] == $id) {
                unset($_SESSION['cartArray'][$index]);
                $_SESSION['cartArray'] = array_values($_SESSION['cartArray']);
                break;
            }
        }
    }
    if(count($_SESSION['cartArray'])<= 0) {
        unset($_SESSION['cartArray']);
    }
    $_SESSION['opencart'] = "0";

    header('location:' . SITEURL . 'menu.php');
}
if(isset($_GET['minescart'])) {
    $id = $_GET['minescart'];
    if (isset($_SESSION['cartArray'])) {
        foreach ($_SESSION['cartArray'] as $index => $row) {
            if ($row['id'] == $id) {
                $qty = $_SESSION['cartArray'][$index]['qty'];
                $qty--;
                if($qty<=0) {
                    unset($_SESSION['cartArray'][$index]);
                    $_SESSION['cartArray'] = array_values($_SESSION['cartArray']);
                break;
                }else{
                    $_SESSION['cartArray'][$index]['qty'] = $qty;
                    $found = true;
                }
                break;
            }
        }
    }
    if(count($_SESSION['cartArray'])<= 0){
        unset($_SESSION['cartArray']);
    }
    $_SESSION['opencart'] = "0";

    header('location:' . SITEURL . 'menu.php');
}
if(isset($_GET['addcart'])) {
    $id = $_GET['addcart'];
    foreach ($_SESSION['cartArray'] as $index => $row) {
        if ($row['id'] == $id) {
            $qty = $_SESSION['cartArray'][$index]['qty'];
            $qty++;
            $_SESSION['cartArray'][$index]['qty'] = $qty;
            $found = true;
            break;
        }
    }
    $_SESSION['opencart'] = "0";

    header('location:' . SITEURL . 'menu.php');
}