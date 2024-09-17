<div class="sub-container-2 category-2 ">
    <div class="menu-container">
        <?php
        $menuArray = $menuClass->menuView();
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
                    <img src="../images/menu/<?php echo $image ?>" alt="">
                    <div>
                        <h3><?php echo $name ?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                        <div class="card-bottom">
                            <h3>LKR <?php echo $price ?></h3>
                            <span>
                                <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="<?php echo SITEURL ?>admin-gc/action/delete.php?menuDel=<?php echo $id ?>"><i class="fa-solid fa-trash"></i></a>
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