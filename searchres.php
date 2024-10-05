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
                                <span class="submitcart">
                                        <form action="Actions/add-cart.php" method="get">
                                            <input type="hidden" name="cart" value="<?php echo $id ?>">
                                            <input type="hidden" name="search" value="<?php echo $search ?>">
                                            <button class="cart-add">Add to Cart</button>
                                        </form>
                                        <form action="Actions\favourite.php" method="get">
                                            <input type="hidden" name="menuId" value="<?php echo $id ?>">
                                            <input type="hidden" name="searchres" value="<?php echo $search ?>">
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
            }
            ?>
        </div>
    </div>

</div>

<!-- code end -->

<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>