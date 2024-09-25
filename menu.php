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
                            <div class="menu-card">
                                <img src="images/menu/<?php echo $image ?>" alt="">
                                <div>
                                    <h1><?php echo $name ?></h1>
                                    <h2>LKR <?php echo $price ?></h2>
                                    <a href="">Add to cart</a>
                                </div>
                            </div>
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