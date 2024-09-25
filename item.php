<?php include_once('components\header.php') ?>
<!-- Code here -->
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $menuitem = $menuClass->menuSelectedview($id);
        if ($menuitem) {
            $name = $menuitem['name'];
            $id = $menuitem['id'];
            $description = $menuitem['description'];
            $category = $menuitem['category'];
            $price = $menuitem['price'];
            $image = $menuitem['image'];
        }
    }
    ?>
<div class="title-container">
    <h1><?php echo $name ?></h1>
</div>
<div class="item-wrapper">
    
    <div class="item-container2">
        <img src="images/menu/<?php echo $image ?>" alt="">
        <div class="item-details">
            <div>
                <h1><?php echo $name ?></h1>
                <p><?php echo $description ?></p>

            </div>
            <div class="action-item">
                <a href=""><i class="fa-regular fa-heart"></i></a>
                <a href="" class="add-cart-btn">
                    <h2>LKR <?php echo $price ?></h2>
                    <h2>Add Cart</h2>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- code end -->
<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>