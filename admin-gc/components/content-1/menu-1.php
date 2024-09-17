<div class="sub-content-1 category-1">
    <h1>Menu</h1>
    <?php 
        if(isset($_SESSION['menu-done'])){
            echo "<p class='done'>add succussfull</p>";
            unset($_SESSION['menu-done']);
        }
        elseif(isset($_SESSION["menu-error"])){
            echo "<p class='error'>add unsucessfull</p>";
            unset($_SESSION["menu-error"]);
        }
    ?>
    <h2>Add Menu</h2>
    <form action="action/add/add-menu.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="cat-name">Category</label>
            <Select name="category">
                <?php
                $categoryArray = $category->categoryView();
                if ($categoryArray == null) {
                } else {
                    foreach ($categoryArray as $row) {
                        $catId = $row['id'];
                        $catName = $row['title'];
                        ?>
                        <option value="<?php echo $catName ?>"><?php echo $catName ?></option>
                        <?php 
                    }
                } 
                ?>
            </Select>
        </div>
        <div>
            <label for="description">Description</label>
            <textArea name="description" id="description" required></textArea>
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="number" name="price" id="price" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
        </div>
        <input type="submit" name="add-menu" value="Add Menu">
    </form>
</div>