<?php include_once('components\header.php') ?>
<!-- Code here -->
<div class="event-img">
</div>
<div class="event-wrapper">
    <div class="evnt-container">
        <?php


        if ($event->viewEvents() == null) {
        } else {
            $eventArray = $event->viewEvents();
            foreach ($eventArray as $row) {
                $id = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $image = $row['image'];
                $startDate = $row['sDate'];
                $sTime = $row['sTime'];
        ?>
                <div class="evt-card">
                    <img src="images/event/<?php echo $image ?>" alt="">
                    <h1><?php echo $title ?></h1>
                    <p><?php echo $description ?></p>
                    <h3>On</h3>
                    <h3><?php echo $startDate ?></h3>
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