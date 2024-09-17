<div class="sub-content-1 category-1">
    <h1>Category</h1>
    <?php 
        if(isset($_SESSION['cat-menu-done'])){
            echo "<p class='done'>add succussfull</p>";
            unset($_SESSION['cat-menu-done']);
        }
        elseif(isset($_SESSION["cat-menu-error"])){
            echo "<p class='error'>add unsucessfull</p>";
            unset($_SESSION["cat-menu-error"]);
        }
    ?>
    
    
    <h2>Add Category</h2>
    <form action="action/add/add-category.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="cat-name">Category Name</label>
            <input type="text" name="cat-name" id="cat-name" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
        </div>
        <input type="submit" name="add-cat"value="Add Category">
    </form>
</div>