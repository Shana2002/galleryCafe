<?php
include("../class/Category.php");
include("../class/Events.php");
include("../class/Menu.php");
include("../class/Promotion.php");
include("../class/Users.php");
include("../config/constant.php");
include("../class/Order.php");
$category = new Category();
$menuClass = new Menu();
$promotion = new Promotion();
$event = new Events();
$order = new Order();
$users = new Staff();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-GalleryCafe</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Link Css -->
    <link rel="stylesheet" href="../style/admin.css?v=<?php echo time() ?>">
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/e82ac91667.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>

    <?php
    if (!isset($_SESSION['login-user'])) {
        include_once('components\login.php');
    }
    ?>
    <div class="container">
        <!-- navigations -->
        <?php include_once('components\nav-components.php') ?>
        <div class="content">
            <div class="content-1">
                <!-- Dashboard -->
                <?php
                if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
                ?>
                    <?php include_once('components\content-1\dashboard-1.php') ?>
                    <!-- Category -->
                    <?php include_once('components\content-1\category-1.php') ?>
                    <!-- Menu -->
                    <?php include_once('components\content-1\menu-1.php') ?>
                <?php
                }
                ?>

                <!-- Order -->
                <?php include_once('components\content-1\order-1.php') ?>
                <!-- Reservation -->
                <?php include_once('components\content-1\reservation-1.php') ?>
                <?php
                if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
                ?>
                    <?php include_once('components\content-1\promotion-1.php') ?>
                    <!-- Events -->
                    <?php include_once('components\content-1\event-1.php') ?>
                    <!-- Users -->
                    <?php include_once('components\content-1\user-1.php') ?>
                <?php
                }
                ?>
                <!-- Promotion -->

                <!-- Setting -->
                <div class="sub-content-1 category-1 setting">
                    <h1>Setting</h1>
                </div>
            </div>
            <!-- Content 2 -->
            <div class="content-2">
                <div class="profile-container">
                    <?php
                    if (isset($_SESSION['login-user'])) {
                    ?>
                        <img src="images\<?php if ($users->staffdetails($_SESSION['login-user'])['image'] == null) {
                                                echo 'Profile-PNG-File.png';
                                            } else {
                                                echo $users->staffdetails($_SESSION['login-user'])['image'];
                                            } ?>" alt="">
                        <h5><?php echo ($_SESSION['login-user']) ?></h5>
                    <?php
                    }
                    ?>

                </div>
                <?php
                if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
                ?>
                    <!-- Dashboard -->
                    <?php include_once('components\content-2\dashboard-2.php') ?>
                    <!-- categoty -->
                    <?php include_once('components\content-2\category-2.php') ?>
                    <!-- Menu -->
                    <?php include_once('components\content-2\menu-2.php') ?>
                <?php
                }
                ?>

                <!-- Order -->
                <?php include_once('components\content-2\order-2.php') ?>
                <!-- Reservation -->
                <?php include_once('components\content-2\reservation-2.php') ?>
                <?php
                if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
                ?>
                    <!-- Promotion -->
                    <?php include_once('components\content-2\promotion-2.php') ?>
                    <!-- events -->
                    <?php include_once('components\content-2\event-2.php') ?>
                    <!-- Users -->
                    <?php include_once('components\content-2\user-2.php') ?><?php
                                                                        }
                                                                            ?>

                    <!-- Setting -->
                    <div class="sub-container-2 category-2 ">
                        <div class="setting-container-2">
                            <?php
                            if (isset($_SESSION['login-user'])) {
                            ?>
                                <img src="images\<?php if ($users->staffdetails($_SESSION['login-user'])['image'] == null) {
                                                        echo 'Profile-PNG-File.png';
                                                    } else {
                                                        echo $users->staffdetails($_SESSION['login-user'])['image'];
                                                    } ?>" alt="">
                                <div>
                                    <h1><?php echo $_SESSION['login-user'] ?></h1>
                                    <h3><?php echo $_SESSION['type'] ?></h3>
                                    <button>Change Password</button>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>

            </div>
        </div>
    </div>


    <?php
    $phpArray = array(55, 49, 20, 24, 45, 30, 30);
    $js_array = json_encode($phpArray);
    ?>
    <script>
        var yValues = <?php echo $js_array ?>
    </script>
    <script src="../script/admin.js?v=<?php echo time() ?>">

    </script>




</body>

</html>
<?php

if (isset($_SESSION['cat-menu'])) {
    echo "<script>tabChange(1)</script>";
    unset($_SESSION['cat-menu']);
}
if (isset($_SESSION['menu-view'])) {
    echo "<script>tabChange(2)</script>";
    unset($_SESSION["menu-view"]);
}
if (isset($_SESSION['prom-view'])) {
    echo "<script>tabChange(5)</script>";
    unset($_SESSION['prom-view']);
}
if (isset($_SESSION['evt-view'])) {
    echo "<script>tabChange(6)</script>";
    unset($_SESSION['evt-view']);
}
if (isset($_SESSION['openor'])) {
    $row = $_SESSION['openor'];
    if ($_SESSION['type'] == 'staff') {
        echo "<script>tabChange(0)</script>";
    } else {
        echo "<script>tabChange(3)</script>";
    }
?>
    <script>
        toggleItems(<?php echo $row ?>)
    </script>
<?php
    unset($_SESSION['openor']);
}
?>