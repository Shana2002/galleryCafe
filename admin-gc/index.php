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
    <div class="container">
        <!-- navigations -->
        <?php include_once('components\nav-components.php') ?>
        <div class="content">
            <div class="content-1">
                <!-- Dashboard -->
                <?php include_once('components\content-1\dashboard-1.php') ?>
                <!-- Category -->
                <?php include_once('components\content-1\category-1.php') ?>
                <!-- Menu -->
                <?php include_once('components\content-1\menu-1.php') ?>
                <!-- Order -->
                <?php include_once('components\content-1\order-1.php') ?>
                <!-- Reservation -->
                <?php include_once('components\content-1\reservation-1.php') ?>
                <!-- Promotion -->
                <?php include_once('components\content-1\promotion-1.php') ?>
                <!-- Events -->
                <?php include_once('components\content-1\event-1.php') ?>
                <!-- Users -->
                <div class="sub-content-1 category-1">
                    <h1>Users</h1>
                    <h2>Add Users</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="username">User Name</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div>
                            <label for="usertype">Type</label>
                            <select name="usertype" id="usertype">
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <input type="submit" value="Add User">
                    </form>
                </div>
                <!-- Setting -->
                <div class="sub-content-1 category-1 setting">
                    <h1>Setting</h1>
                </div>
            </div>
            <!-- Content 2 -->
            <div class="content-2">
                <div class="profile-container">
                    <img src="../Assest/biriyani.jpeg" alt="">
                    <h5>Hansaka</h5>
                </div>
                <!-- Dashboard -->
                 <?php include_once('components\content-2\dashboard-2.php') ?>
                <!-- categoty -->
                <?php include_once('components\content-2\category-2.php') ?>
                <!-- Menu -->
                <?php include_once('components\content-2\menu-2.php') ?>
                <!-- Order -->
                <?php include_once('components\content-2\order-2.php') ?>
                <!-- Reservation -->
                <?php include_once('components\content-2\reservation-2.php') ?>
                <!-- Promotion -->
                <?php include_once('components\content-2\promotion-2.php') ?>
                <!-- events -->
                <?php include_once('components\content-2\event-2.php') ?>
                <!-- Users -->
                <div class="sub-container-2 category-2 ">
                    <div class="order-container">
                        <table class="oreder-table">
                            <tr>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th>Action</th>

                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Hansaka Ravishan</td>
                                <td>
                                    <a href="">Delete</a>
                                    <a href="">Reset Password</a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- Setting -->
                <div class="sub-container-2 category-2 ">
                    <div class="setting-container-2">
                        <img src="../Assest/biriyani.jpeg" alt="">
                        <div>
                            <h1>Hansaka Ravishan</h1>
                            <h3>Admin</h3>
                            <button>Change Password</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php 
            $phpArray = array(55, 49, 20, 24, 45, 30, 30) ;
            $js_array = json_encode($phpArray);
        ?>
        <script>var yValues = <?php echo $js_array ?></script>
    <script src="../script/admin.js?v=<?php echo time() ?>">
        
    </script>
    



</body>

</html>
<?php

    if (isset($_SESSION['cat-menu'])) {
        echo "<script>tabChange(1)</script>";
        unset($_SESSION['cat-menu']);
    }
    if(isset($_SESSION['menu-view'])){
        echo "<script>tabChange(2)</script>";
        unset($_SESSION["menu-view"]);
    }
    if(isset($_SESSION['prom-view'])){
        echo "<script>tabChange(5)</script>";
        unset($_SESSION['prom-view']);
    }
    if(isset($_SESSION['evt-view'])){
        echo "<script>tabChange(6)</script>";
        unset($_SESSION['evt-view']);
    }
    if(isset($_SESSION['openor'])){
        $row = $_SESSION['openor'];
        echo "<script>tabChange(3)</script>";
        ?><script>toggleItems(<?php echo $row ?>)</script><?php
        unset($_SESSION['openor']);
    }
    ?>