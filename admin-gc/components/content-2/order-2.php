<div class="sub-container-2 category-2 ">
    <div class="order-container">
        <table class="oreder-table1">
            <tr>
                <th></th>
                <th>Bill No</th>
                <th>Customer name</th>
                <th>Total Amount</th>
                <th>States</th>
                <th>Action</th>
            </tr>
            <?php
            $billArray  = $order->displayBills(1);
            if ($billArray == null) {
            } else {
                $count = 1;
                foreach ($billArray as $row) {
                    $billId = $row["id"];
                    $cusName =  $row['cusname'];
                    $billAmt = $row['subtot'];
                    $billStatus = $row['billstatus'];

            ?>
                    <tr class="main-row">
                        <th><button class="expand-btn" onclick="toggleItems(<?php echo $count ?>)"><i class="fa-solid fa-caret-down"></i></button></th>
                        <td><?php echo $billId ?></td>
                        <td><?php echo $cusName ?></td>
                        <td><?php echo $billAmt ?></td>
                        <td><?php echo $billStatus ?></td>
                        <td>
                            <?php
                            if ($billStatus == 'order done') {
                            ?>
                                <a class="btnaddprep" href="action/editorder.php?billdone=<?php echo $billId ?>" style="display:flex;align-items:center;justify-content:center; width:80%;gap:10px;"><i class="fa-regular fa-circle-check"></i>Deliverd</a>

                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="item-info" id="items-<?php echo $count ?>">
                        <td></td>
                        <td colspan="5">
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $orderArray = $order->displayOrder($billId);
                                    if ($orderArray == null) {
                                    } else {
                                        foreach ($orderArray as $orderrow) {
                                            $orderID = $orderrow['id'];
                                            $menuName = $orderrow['menuName'];
                                            $qty = $orderrow['qty'];
                                            $status = $orderrow['orderstatus'];
                                    ?>
                                            <tr>
                                                <td><?php echo $menuName ?></td>
                                                <td><?php echo $qty ?></td>
                                                <td><?php echo $status ?></td>
                                                <td style="display:flex;align-items:center;justify-content:center;">
                                                    <?php
                                                    if ($status == 'get order') {
                                                    ?>
                                                        <a class="btnaddprep" href="action/editorder.php?addprep=<?php echo $orderID ?>&billid=<?php echo $billId ?>&row=<?php echo $count ?>">Start Preparing</a>
                                                    <?php
                                                    } elseif ($status == 'start prepairing') {
                                                    ?>
                                                        <a class="btnaddprep" href="action/editorder.php?prepdone=<?php echo $orderID ?>&billid=<?php echo $billId ?>&row=<?php echo $count ?>">Prepared</a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
            <?php
                    $count++;
                }
            }
            ?>

            <!-- <tr class="main-row">
                <th><button class="expand-btn" onclick="toggleItems(2)"><i class="fa-solid fa-caret-down"></i></button></th>
                <td>001</td>
                <td>Hansaka Ravishan</td>
                <td>Chicken Mix Rice</td>
                <td>Prepairing</td>
                <td>
                    <a href="">Prepairing</a>
                    <a href="">Deliverd</a>
                </td>
            </tr>
            <tr class="item-info" id="items-2">
                <td></td>
                <td colspan="5">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pizza</td>
                                <td>1</td>
                                <td>$15.00</td>
                                <td>$15.00</td>
                            </tr>
                            <tr>
                                <td>Pasta</td>
                                <td>2</td>
                                <td>$10.00</td>
                                <td>$20.00</td>
                            </tr>
                            <tr>
                                <td>Salad</td>
                                <td>1</td>
                                <td>$5.00</td>
                                <td>$5.00</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr> -->

        </table>
    </div>
</div>