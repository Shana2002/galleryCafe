<div class="sub-container-2 category-2 ">
    <div class="order-container">
        <table class="oreder-table">
            <tr>
                <th>User Name</th>
                <th>User Type</th>
                <th>Action</th>

            </tr>
            <?php
            $userArray = $users->listStaff();
            if ($userArray == null) {
            } else {
                foreach ($userArray as $row) {
            ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td>
                            <?php 
                                if ($row['type'] == 'staff') {
                                    ?>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                        <a href=""><i class="fa-solid fa-lock-open"></i></a>
                                    <?php 
                                }
                            ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>


        </table>
    </div>
</div>