<form action="Actions/login.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="login" name="submit">
</form>
<?php
    include("class/Category.php");
    $category = new Category();
    print_r($category->categoryView());
?>