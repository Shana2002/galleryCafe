<?php include_once('components\header.php') ?>
<!-- Code here -->
<div class="title-container">
    <h1>Menu</h1>
</div>
<div class="menu-wrapper">
    <?php
    $categoryArray = $category->categoryView();
    if ($categoryArray == null) {
    } else {
        foreach ($categoryArray as $row) {

            $catName = $row['title'];

    ?>
            <div class="menu-container">
                <div class="category-name">
                    <h1><?php echo $catName ?></h1>
                </div>
                <div class="menu-item-container">
                    <?php
                    $menuArray = $menuClass->menuViewCat($catName);
                    if ($menuArray == null) {
                    } else {
                        foreach ($menuArray as $row) {
                            $name = $row['name'];
                            $id = $row['id'];
                            $description = $row['description'];
                            $category = $row['category'];
                            $price = $row['price'];
                            $image = $row['image'];
                    ?>
                            <a href="item.php?id=<?php echo $id ?>" class="menu-card">
                                <img src="images/menu/<?php echo $image ?>" alt="">
                                <div>
                                    <h1><?php echo $name ?></h1>
                                    <h2>LKR <?php echo $price ?></h2>
                                    <span class="submitcart">
                                        <form action="Actions/add-cart.php" method="get">
                                            <input type="hidden" name="cart" value="<?php echo $id ?>">
                                            <input type="hidden" name="menu" value="1">
                                            <button class="cart-add">Add to Cart</button>
                                        </form>
                                        <form action="Actions\favourite.php" method="get">
                                            <input type="hidden" name="menuId" value="<?php echo $id ?>">
                                            <input type="hidden" name="menusite" value="1">
                                            <?php if(isset($_SESSION['cusid'])){
                                                if($menuClass->viewfavourite($_SESSION['cusid'],$id)){
                                                    ?>
                                                        <button class="menu-fav"><i class="fa-solid fa-heart"></i></button>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <button class="menu-fav"><i class="fa-regular fa-heart"></i></button>
                                                    <?php
                                                }
                                                }
                                                else{
                                                    ?>
                                                        <button disabled="disabled"><i class="fa-regular fa-heart"></i></button>
                                                    <?php
                                                } 
                                            ?>
                                                
                                        </form>
                                    </span>
                                </div>
                            </a>
                    <?php
                        }
                    }

                    ?>
                </div>
            </div>

    <?php
        }
    }

    ?>
    <!-- <div class="menu-container">
        <div class="category-name">
            <h1>Sri Lanka</h1>
        </div>
        <div class="menu-item-container">
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-container">
        <div class="category-name">
            <h1>Sri Lanka</h1>
        </div>
        <div class="menu-item-container">
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="Assest/pizza2.jpg" alt="">
                <div>
                    <h1>pizza</h1>
                    <h2>LKR 1250</h2>
                    <a href="">Add to cart</a>
                </div>
            </div>

        </div>

    </div> -->
</div>

<!-- code end -->
<?php include_once('components\getintouch.php') ?>
<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>