<div class="nav-container">
    <h1><i class="fa-solid fa-utensils fa-lg"></i>Gallery Cafe</h1>
    <ul>
        <?php
        if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
        ?>
            <li><a class="nav-btn active-nav"><i class="fa-solid fa-grip-vertical"></i>Orverview</a></li>
            <li><a class="nav-btn"><i class="fa-solid fa-layer-group"></i>Category</a></li>
            <li><a class="nav-btn"><i class="fa-solid fa-burger"></i>Menu</a></li>
        <?php
        }
        ?>

        <li><a class="nav-btn <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'staff'){echo 'active-nav'; } ?>"><i class="fa-solid fa-list-check"></i>Orders</a></li>
        <li><a class="nav-btn"><i class="fa-regular fa-bookmark"></i>Reservation</a></li>
        <?php
        if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
        ?>
            <li><a class="nav-btn"><i class="fa-solid fa-percent"></i>Promotion</a></li>
            <li><a class="nav-btn"><i class="fa-regular fa-calendar-days"></i>Events</a></li>
            <li><a class="nav-btn"><i class="fa-solid fa-users"></i>Users</a></li>
        <?php
        }
        ?>
        
        <li><a class="nav-btn "><i class="fa-solid fa-screwdriver-wrench"></i>Setting</a></li>
        <li><a href="action/log-out.php" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>
    </ul>
</div>