<div class="sub-content-1 category-1">
    <h1>Reservation</h1>
    <h2>Today Reservation</h2>
    <div class="orderprp-container">
        <?php
        $resArray = $order->showReservation('today');
        if ($resArray == null) {
        } else {
            foreach ($resArray as $reservation) {
                $id = $reservation['id'];
                $name = $reservation['name'];
                $date = $reservation['date'];
                $time = $reservation['time'];
        ?>
                <div class="prep-card">
                    <h4><?php echo $name ?></h4>
                    <h4><?php echo $time ?></h4>
                </div>
        <?php
            }
        }
        ?>

    </div>
</div>