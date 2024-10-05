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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time() ?>">
    <script src="https://kit.fontawesome.com/e82ac91667.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    
    <title>Gallery Cafe</title>
</head>

<body>
    <div class="top-container">
        <div class="top-wrapper">
            <div class="contact-container">
                <div class="contact-wrapper">
                    <p>Order online or Call</p>
                    <h3>0771123463 , 0703399599</h3>
                </div>
            </div>
            <div class="logo">
                <h1><i class="fa-solid fa-utensils fa-lg"></i><span>THE</span><br>Gallery Cafe</h1>
            </div>
            <div class="action-container">
                <?php if(isset($_SESSION['cusid'])){
                    ?>
                    <a onclick="showlogout()"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    <?php
                }else{
                    ?>
                    <a onclick="openLoginform()"><i class="fa-regular fa-user"></i></a>
                    <?php
                } 
                ?>
                
                <a onclick="openfav()"><i class="fa-regular fa-heart"></i><div class="action-item2"><p><?php 
                if(isset($_SESSION['cusid'])){echo count($menuClass->viewFavouriteAll($_SESSION['cusid']));}else{echo 0;}
                 ?></p></div></a>
                <a onclick="opencart()"><i class="fa-solid fa-cart-shopping"></i><div class="action-item2"><p>
                    <?php 
                        if(isset($_SESSION['cartArray'])){
                            echo count($_SESSION['cartArray']);
                        }
                        else{
                            echo 0;
                        }
                    ?>
                </p></div></a>
                <a onclick="opensearch()"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i>
                    <h3>Home</h3>
                </a></li>
            <li><a href="menu.php"><i class="fa-solid fa-motorcycle"></i>
                    <h3>Order online</h3>
                </a></li>
                <li><a href="reservation.php"><i class="fa-regular fa-bookmark"></i>
                    <h3>Reservation</h3>
                </a></li>
            <li><a href="events.php"><i class="fa-solid fa-calendar-days"></i>
                    <h3>Events</h3>
                </a></li>
            <li><a href="promotions.php"><i class="fa-solid fa-percent"></i>
                    <h3>Promotions</h3>
                </a></li>
            <li><a href="about.php"><i class="fa-regular fa-address-card"></i>
                    <h3>Contact us</h3>
                </a></li>
        </ul>
    </nav>