<div class="sub-content-1 category-1">
    <h1>Events</h1>
    <?php 
        if(isset($_SESSION['evt-add-done'])){
            echo "<p class='done'>add succussfull</p>";
            unset($_SESSION['evt-add-done']);
        }
        elseif(isset($_SESSION["evt-add-error"])){
            echo "<p class='error'>add unsucessfull</p>";
            unset($_SESSION["evt-add-error"]);
        }
    ?>
    <h2>Add Events</h2>
    <form action="action/Add/add-event.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="startDate">Date</label>
            <input type="date" name="sdate" id="startDate" required>
        </div>
        <div>
            <label for="startTime">End Date</label>
            <input type="time" name="stime" id="startTime" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
        </div>
        <input type="submit" name="add-event" value="Add Description">
    </form>
</div>