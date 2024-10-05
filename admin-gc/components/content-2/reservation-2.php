<div class="sub-container-2 category-2 ">
    <div class="order-container">
        <table class="oreder-table">
            <tr>
                <th>No</th>
                <th>Customer name</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php
            $resArray = $order->showReservation('all');
            if ($resArray == null) {
            } else {
                foreach ($resArray as $reservation) {
                    $id = $reservation['id'];
                    $name = $reservation['name'];
                    $date = $reservation['date'];
                    $time = $reservation['time'];

            ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $time ?></td>
                    </tr>
            <?php

                }
            }
            ?>


        </table>
    </div>
</div>