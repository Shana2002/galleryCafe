<div class="sub-content-1 category-1">
    <h1>Users</h1>
    <h2>Add Users</h2>
    <form action="action/add/add-user.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="username">User Name</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="usertype">Type</label>
            <select name="usertype" id="usertype">
                <option value="staff">Staff</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <input type="submit" value="Add User" name="add-user">
    </form>
</div>