<div class="sub-content-1 category-1 <?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'staff'){echo 'active-1'; } ?>">
    <h1>Order</h1>
    <h2>Now Prepairing</h2>
    <div class="orderprp-container">
        <?php
        $menuArray1 = $order->displayAllperporder();
        if ($menuArray1 == null) {
        } else {
            foreach ($menuArray1 as $row) {
                $menuName = $row['menuName'];
        ?>
                <div class="prep-card">
                    <h4><?php echo $menuName ?></h4>
                    <h4>Bill No: <?php echo $row['bill'] ?></h4>
                </div>
        <?php
            }
        }
        ?>

        <!-- <div class="prep-card">
            <h4>Chicken Mix Rice</h4>
            <a href="">Done</a>
        </div>
        <div class="prep-card">
            <h4>Chicken Mix Rice</h4>
            <a href="">Done</a>
        </div>
        <div class="prep-card">
            <h4>Chicken Mix Rice</h4>
            <a href="">Done</a>
        </div> -->
    </div>
</div>