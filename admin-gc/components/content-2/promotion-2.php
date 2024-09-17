<div class="sub-container-2 category-2 ">
    <div class="menu-container">
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
                <div class="menu-card">
                    <img src="../images/promotion/<?php echo $image ?>" alt="">
                    <div>
                        <h3><?php echo $title ?></h3>
                        <p><?php echo $description ?></p>
                        <div class="card-bottom">
                            <div>
                                <h5>Start Date: <?php echo $startDate ?></h5>
                                <h5>End Date: <?php echo $endDate ?></h5>
                            </div>
                            <span>
                                <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="<?php echo SITEURL ?>admin-gc/action/delete.php?promDel=<?php echo $id ?>"><i class="fa-solid fa-trash"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
        <?php
            }
        }

        ?>
    </div>
</div>