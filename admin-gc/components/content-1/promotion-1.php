<div class="sub-content-1 category-1">
    <h1>Promotion</h1>
    <?php 
        if(isset($_SESSION['prom-add-done'])){
            echo "<p class='done'>add succussfull</p>";
            unset($_SESSION['prom-add-done']);
        }
        elseif(isset($_SESSION["prom-add-error"])){
            echo "<p class='error'>add unsucessfull</p>";
            unset($_SESSION["prom-add-error"]);
        }
    ?>
    <h2>Add Promotion</h2>
    <form action="action/Add/add-promotion.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="startDate">Start Date</label>
            <input type="date" name="sdate" id="startDate" required>
        </div>
        <div>
            <label for="endDate">End Date</label>
            <input type="date" name="edate" id="endDate" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
        </div>
        <input type="submit" name="add-promotion" value="Add Promotion">
    </form>
</div>