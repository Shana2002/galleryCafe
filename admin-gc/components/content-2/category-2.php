<div class="sub-container-2 category-2 ">
    <div class="category-container">
        <?php
        $categoryArray = $category->categoryView();
        if ($categoryArray==null){

        }else{
            foreach ($categoryArray as $row) {
                $catId = $row['id'];
                $catName = $row['title'];
                $catImg = $row['image'];
            ?>
                <div class="cat-card">
                    <img src="../images/category/<?php echo $catImg ?>" alt="">
                    <h3><?php echo $catName ?></h3>
                    <div class="cat-act">
                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="<?php echo SITEURL ?>admin-gc/action/delete.php?catDel=<?php echo $catId ?>"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            <?php
            }
        }
        
        ?>
    </div>
</div>