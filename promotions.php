<?php include_once('components\header.php') ?>
<!-- Code here -->
<div class="promo-container">
</div>
<div class="event-wrapper">
    <div class="evnt-container">
        <?php

        $promArray = $promotion->viewpromotions();
        if ($promArray == null) {
        } else {
            foreach ($promArray as $row) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $image = $row['image'];
                $startDate = $row['start'];
                $endDate = $row['end'];
        ?>
                <div class="prom-card">
                    <img src="images/promotion/<?php echo $image ?>" alt="">
                    <h1><?php echo $title ?></h1>
                    <p><?php echo $description ?></p>
                    <div>
                        <h3>Till</h3>
                        <h3><?php echo $endDate ?></h3>
                        <a href="menu.php">Get Offer</a>
                    </div>
                </div>
        <?php
            }
        }

        ?>
    </div>
</div>
<!-- code end -->
<?php include_once('components\getintouch.php') ?>
<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>