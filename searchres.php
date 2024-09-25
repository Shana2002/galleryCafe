<?php include_once('components\header.php') ?>
<!-- Code here -->
<div class="title-container">
    <h1>Search Resaults of "<?php if (isset($_GET['search'])) {
                                echo $_GET['search'];
                            } ?>"</h1>
    <form action="" method="get" class="search-container">
        <input type="search" name="search" id="search">
    </form>
</div>
<div class="menu-wrapper">
    <div class="menu-container">
        <div class="menu-item-container">
            <?php
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $seres = $menuClass->menuSearch($search);
                if ($seres == null) {
                } else {
                    foreach ($seres as $row) {
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
                                <form action="add_to_cart.php" method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                                    <button type="submit">Add to cart</button>
                                </form>
                            </div>
                        </a>
            <?php
                    }
                }
            }
            ?>

            <!-- <div class="menu-card">
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
            </div> -->
        </div>
    </div>

</div>

<!-- code end -->

<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>