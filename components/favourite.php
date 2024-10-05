<div class="favorite-tab" id="favourite-tab">
    <div class="closebtn" onclick="openfav()"><i class="fa-solid fa-xmark"></i></div>
    <div class="favourite">
        <div class="fav-head-container"><i class="fa-regular fa-heart"></i>
            <h1>Favourite</h1>
        </div>
        <div class="item-container">
            <?php
            if (isset($_SESSION['cusid'])) {
                $cusId = $_SESSION['cusid'];
                $favarray = $menuClass->viewFavouriteAll($cusId);
                if ($favarray == null) {
            ?>
                    <div class="nofav">
                        <h1>No Favourite Item Selected</h1>
                    </div>
                    <?php
                } else {
                    foreach ($favarray as $menuID) {
                        $row = $menuClass->menuSelectedview($menuID);
                        $name = $row['name'];
                        $id = $row['id'];
                        $description = $row['description'];
                        $category = $row['category'];
                        $price = $row['price'];
                        $image = $row['image'];
                    ?>
                        <a href="item.php?id=<?php echo $id ?>" class="item-card">
                            <img src="images/menu/<?php echo $image ?>" alt="">
                            <h4><?php echo $name ?></h4>
                            <div class="price">
                                <h3>LKR <?php echo $price ?></h3>
                                <form action="Actions\favourite.php" method="get">
                                    <input type="hidden" name="menuId" value="<?php echo $id ?>">
                                    <input type="hidden" name="favtab" value="1">
                                    <button class="menu-fav"><i class="fa-solid fa-heart"></i></button>
                                </form>

                            </div>
                        </a>
                <?php
                    }
                }
            } else {
                ?>
                <div class="nofav">
                    <h1>No Favourite Item Selected</h1>
                </div>
            <?php
            }

            ?>
        </div>
    </div>

</div>