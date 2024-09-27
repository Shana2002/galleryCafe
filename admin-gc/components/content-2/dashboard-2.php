<div class="sub-container-2 active-2 orverview-2 ">

    <div class="chart-container">
        <h1>Weekly Sales</h1>
        <canvas id="barChart"></canvas>
    </div>
    <div class="recent-order">
        <h2>Recent Order</h2>
        <div class="table-container">
            <table class="recent-order-tb">
                <tr>
                    <th>Customer</th>
                    <th>BIll Number</th>
                    <th>Amount</th>
                </tr>
                <?php
                $billArray2 = $order->displayBills("all");
                if ($billArray2 == null) {
                } else {
                    $count = 0;
                    foreach ($billArray2 as $bill) {
                        if ($count == 4) {
                            break;
                        }
                ?>
                        <tr>
                            <td><?php echo $bill['cusname'] ?></td>
                            <td>#<?php echo $bill['id'] ?></td>
                            <td>LKR <?php echo $bill['subtot'] ?></td>
                        </tr>
                <?php
                        $count++;
                    }
                }
                ?>
            </table>
        </div>
    </div>

</div>